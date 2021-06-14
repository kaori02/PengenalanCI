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
        <h1>Nice to see you!</h1>
        <h2>I'm Dafa Berlian<br> My dream is to be a <span class="typing-efffect"></span></h2>
      </div>
    </div>
  </section>

  <section id="about">
    <div class="container">
      <h3>About</h3>
      <p>I am someone who is eager to become an expert in all fields, so I try to explore myself further through various activities that I can do. I was a runner-up in an English speech competition at the city level and was the third champion in an
          article writing competition at the provincial level. There are a lot of things that I want to do but I have not been able to make it happen. Therefore I really want to learn from various sources. I want to improve my communication skills
          with people so that I can be more confident when speaking in front of people I don't know, even in front of many people. Because I believe that communication can open connections and connections is one of the keys to success. </p>
    </div>
  </section>

  <section id="skills">
    <div class="container">
      <h3>Skills</h3>
      <h4>Basic Programming</h4>
      <div class="bar">
        <span class="nilai programming">Advance</span>
      </div>

      <h4>Laravel</h4>
      <div class="bar">
        <span class="nilai laravel">Beginner</span>
      </div>

      <h4>Codeigniter</h4>
      <div class="bar">
        <span class="nilai codeigniter">Intermediate</span>
      </div>

      <h4>PHP</h4>
      <div class="bar">
        <span class="nilai php">Intermediate</span>
      </div>

      <h4>Python</h4>
      <div class="bar">
        <span class="nilai py">Intermediate</span>
      </div>

      <h4>C++</h4>
      <div class="bar">
        <span class="nilai cpp">Advance</span>
      </div>
    </div>
  </section>


  <section class="cv">
    <h3>Get my CV right here!</h3>
    <div class="vertical-center">
      <a href=<?= base_url("public/profile/uploads/CV.pdf")?> download=<?php base_url("public/profile/uploads/CV.pdf")?>>
        <img src=<?= base_url("public/profile/uploads/cvLogo.gif")?> alt="logo CV">
      </a>
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
