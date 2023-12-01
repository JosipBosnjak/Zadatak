<link rel="stylesheet" href="dashboard.css">

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="hello">Hello, <?= session()->get('firstname') ?>, <?= session()->get('lastname') ?> </h1>
      <br>
      <h4>Your E-mail adress is <?= session()->get('email') ?> </h4>
      <h4>Your web adress is <?= session()->get('web') ?> </h4>
     <a href="/profile">For more information or update click me</a>

    </div>
  </div>
</div>
