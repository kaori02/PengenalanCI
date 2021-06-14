<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile - Dafa Berlian</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href=<?= base_url("public/img/favicon.ico")?> type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href=<?= base_url("public/profile/css/style.css")?>>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
</head>

<body>
  <input type="checkbox" id="check">
  <div class="sidebar">
    <ul>
			<a href=<?= base_url("index.php/about/")?>><li>About</li></a>
      <a href=<?= base_url("index.php/contact/")?>><li>Contact</li></a>
    </ul>
  </div>

  <header>
    <div class="container-fluid">
      <h1><a href=<?= base_url("/")?>>DAFA BERLIAN</a></h1>
      <ul>
				<a href=<?= base_url("index.php/about/")?>><li>About</li></a>
				<a href=<?= base_url("index.php/contact/")?>><li>Contact</li></a>
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
				<h1 style="font-size: 700%; text-align: center; color: white; text-shadow: 4px 4px 5px #333;font-family: 'Courgette', cursive; color: #fff;">Reach Me Out!</h1>
        <h2><br><span></span></h2>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <h3>Contact</h3>
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

  <script src=<?= base_url("public/profile/js/script.js")?>></script>
</body>

</html>
