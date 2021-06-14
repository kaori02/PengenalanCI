<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portfolio - Dafa Berlian</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href=<?= base_url("public/img/favicon.ico")?> type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href=<?= base_url("public/hometown/css/style.css")?>>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body>
  <input type="checkbox" id="check">
  <div class="sidebar">
    <ul>
			<a href=<?= base_url("about/")?>><li>About</li></a>
      <a href=<?= base_url("contact/")?>><li>Contact</li></a>
      <a href=<?= base_url("portofolioindex/")?>><li>Portfolio</li></a>
    </ul>
  </div>

  <header>
    <div class="container-fluid">
      <h1><a href=<?= base_url("/")?>>DAFA BERLIAN</a></h1>
      <ul>
				<a href=<?= base_url("about/")?>><li>About</li></a>
				<a href=<?= base_url("contact/")?>><li>Contact</li></a>
				<a href=<?= base_url("portofolioindex/")?>><li>Portfolio</li></a>
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
              <h1>My Portfolio</h1>
          </div>
      </div>
  </section>

  <section id="about">
		<?php foreach ($portofolios as $portofolio): ?>
			<div class="container">
				<a target="blank" href="<?= base_url('public/upload/portofolio/'.$portofolio->portofolio_pic) ?>"><img src="<?= base_url('public/upload/portofolio/'.$portofolio->portofolio_pic) ?>" width="40" /> </a>
        <div class="textbox">
          <h1><?= $portofolio->portofolio_name ?></h1>
					<small><?= $portofolio->portofolio_date ?></small>
          <br>
          <p><?= $portofolio->portofolio_desc ?></p>
        </div>
      </div>
		<?php endforeach; ?>
  </section>

  <footer>
      <div class="container">
          <small>Copyright &copy; 2020 - Dafa Berlian.</small>
      </div>
  </footer>

</body>

</html>
