<?php

echo '<pre>' . print_r($_POST, true) . '</pre>'; 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $checkbox = $_POST['invalidCheck'];

    $errors = [];

    if ($errors == []) {
        header('Location: /esercizioS1_L2/success.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <title>Form Validation</title>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-8 mx-auto mt-4">
    <div class="mb-3">
    
        <form action="" method="post" novalidate><div class="row">
  <div class="col">
    
  <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="First name" id="name" aria-label="First name">
  </div>
  <div class="col">
  <label for="surname" class="form-label">Surname</label>
    <input type="text" class="form-control" placeholder="Surname" id="surname" aria-label="Last name">
  </div>
</div>
</div>
<div class="mb-3">
<div class="row">
  <div class="col-8">
  <label for="email" class="form-label">Email</label>
  <input type="email" class="form-control mb-3" id="email" placeholder="example@email.com">
  <label for="password" class="form-label">Password</label>
  <input type="password" class="form-control mb-3" id="password" placeholder="example@email.com">
  <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
      <div class="col-12">
  <button type="submit" class="btn btn-primary mt-2">Send</button></div>
</form>
</div>
</div>
</div>
    </div>
</div>
</body>
</html>