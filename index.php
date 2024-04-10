<?php

echo '<pre>' . print_r($_POST, true) . '</pre>'; ?>


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
    <div class="row">
  <div class="col">
    <form method="post" novalidate>
  <label for="nameinput" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="First name" id="nameinput" aria-label="First name">
  </div>
  <div class="col">
  <label for="surnameinput" class="form-label">Surname</label>
    <input type="text" class="form-control" placeholder="Surname" id="surnameinput" aria-label="Last name">
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
  <button type="submit" class="btn btn-primary">Send</button>
</form>
</div>
</div>
</div>
    </div>
</div>
</body>
</html>