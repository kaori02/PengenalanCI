<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dafa Berlian</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<link rel="shortcut icon" href=<?= base_url("public/img/favicon.ico")?> type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href=<?= base_url("public/css/style.css")?>>
  <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body>
  <input type="checkbox" id="check">
  <div class="sidebar">
    <ul>
      <a href="profile/"><li>Profile</li></a>
      <a href="hometown/"><li>Hometown</li></a>
      <a href="food/"><li>Food</li></a>
      <a href="tourist/"><li>Tourist</li></a>
    </ul>
  </div>

  <header>
    <div class="container-fluid">
      <h1><a href=".">DAFA BERLIAN</a></h1>
      <ul>
        <a href="profile/"><li>Profile</li></a>
        <a href="hometown/"><li>Hometown</li></a>
        <a href="food/"><li>Food</li></a>
        <a href="tourist/"><li>Tourist</li></a>
      </ul>

      <label for="check" class="mobile-menu">
        <div></div>
        <div></div>
        <div></div>
      </label>
    </div>
  </header>

  <section class="banner">
    <div class="container">
      <div class="banner-left">
        <h1>Welcome To My Website</h1>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <h3>My Contact</h3>
      <div class="col-3">
        <h4>Address</h4>
        <p>Perumahan Kebon jeruk Elok Blok A, No. 4, RT. 10, Kel. Solok Sipin, Kec. Danau Sipin, Kota Jambi</p>
      </div>

      <div class="col-3">
        <h4>Email</h4>
        <p>dafaberlian123@gmail.com</p>
      </div>

      <div class="col-3">
        <h4>Call</h4>
        <p>+62 813 2216 8022</p>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <small>Copyright &copy; 2020 - Dafa Berlian.</small>
    </div>
  </footer>
</body>
</html>
