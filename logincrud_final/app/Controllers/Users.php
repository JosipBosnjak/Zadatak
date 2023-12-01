<?php namespace App\Controllers;

use App\Models\UserModel;


class Users extends BaseController
{
	public function index()
    {
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            
            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password don\'t match'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();

                $user = $model->where('email', $this->request->getVar('email'))
                    ->first();

                // Check if the user is an admin
                if ($user['isadmin'] == 1) {
                    
                    return redirect()->to(base_url('admin/customers'));
                }

                
                $this->setUserSession($user);
                return redirect()->to('http://localhost:8080/dashboard');
            }
        }

        echo view('templates/header', $data);
        echo view('login');
        echo view('templates/footer');
    }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'email' => $user['email'],
            'web' => $user['web'],
            'isadmin' => $user['isadmin'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }
	public function register(){
		$data = [];
		helper(['form']);

		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'firstname' => 'required|min_length[3]|max_length[20]',
				'lastname' => 'required|min_length[3]|max_length[20]',
				'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
				'web' => 'required|min_length[6]|max_length[50]',
				'isadmin' => 'required|<min_length 1=""></min_length>|max_length[50]',
				'password' => 'required|min_length[8]|max_length[255]',
				'password_confirm' => 'matches[password]',
				
			];

			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();

				$newData = [
					'firstname' => $this->request->getVar('firstname'),
					'lastname' => $this->request->getVar('lastname'),
					'email' => $this->request->getVar('email'),
					'web' => $this->request->getVar('web'),
					'isadmin' => $this->request->getVar('isadmin'),
					'password' => $this->request->getVar('password'),
					
				];
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('http://localhost:8080/');

			}
		}


		echo view('templates/header', $data);
		echo view('register');
		echo view('templates/footer');
	}

	public function profile(){
		
		$data = [];
		helper(['form']);
		$model = new UserModel();

		if ($this->request->getMethod() == 'post') {
			
			$rules = [
				'firstname' => 'required|min_length[3]|max_length[20]',
				'lastname' => 'required|min_length[3]|max_length[20]',
				];

			if($this->request->getPost('password') != ''){
				$rules['password'] = 'required|min_length[8]|max_length[255]';
				$rules['password_confirm'] = 'matches[password]';
			}


			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{

				$newData = [
					'id' => session()->get('id'),
					'firstname' => $this->request->getPost('firstname'),
					'lastname' => $this->request->getPost('lastname'),
					];
					if($this->request->getPost('password') != ''){
						$newData['password'] = $this->request->getPost('password');
					}
				$model->save($newData);

				session()->setFlashdata('success', 'Successfuly Updated');
				return redirect()->to('http://localhost:8080/profile');

			}
		}

		$data['user'] = $model->where('id', session()->get('id'))->first();
		echo view('templates/header', $data);
		echo view('profile');
		echo view('templates/footer');
	}

	public function logout(){
		session()->destroy();
		return redirect()->to('http://localhost:8080/');
	}

}




