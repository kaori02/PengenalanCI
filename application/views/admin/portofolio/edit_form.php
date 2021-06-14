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
		<div class="container">
			<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?= $this->session->flashdata('success'); ?>
				</div>
			<?php endif; ?>

			<div class="card mb-3">
				<div class="card-header">
					<a href="<?= base_url('admin/portofolios/') ?>" class="btn btn-outline-secondary btn-block">Back</a>

				</div>
				<div class="card-body">
				<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/portofolios/edit/ID --->

							<input type="hidden" name="portofolio_id" value="<?php echo $portofolio->portofolio_id?>" />

							<div class="form-group">
								<label for="portofolio_name">Name <span style="color: red;">*</span></label>
								<input class="form-control <?php echo form_error('portofolio_name') ? 'is-invalid':'' ?>"
								 type="text" name="portofolio_name" placeholder="Portofolio Name" value="<?php echo $portofolio->portofolio_name?>" />
								<div class="invalid-feedback">
									<?php echo form_error('portofolio_name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="portofolio_date">Date <span style="color: red;">*</span></label>
								<input class="form-control <?php echo form_error('portofolio_date') ? 'is-invalid':'' ?>"
								 type="date" name="portofolio_date" value="<?php echo $portofolio->portofolio_date ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('portofolio_date') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="portofolio_desc">Description <span style="color: red;">*</span></label>
								<textarea class="form-control <?php echo form_error('portofolio_desc') ? 'is-invalid':'' ?>"
								 name="portofolio_desc" placeholder="Portofolio description..."><?php echo $portofolio->portofolio_desc ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('portofolio_desc') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="portofolio_pic">Certificate Picture</label>
								<input class="form-control-file <?php echo form_error('portofolio_pic') ? 'is-invalid':'' ?>"
								 type="file" name="portofolio_pic" />
								<input type="hidden" name="old_image" value="<?php echo $portofolio->portofolio_pic ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('portofolio_pic') ?>
								</div>
							</div>
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

				</div>

				<div class="card-footer small text-muted">
				<span style="color: red;">*</span> required fields
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
  </section>

  <footer>
      <div class="container">
          <small>Copyright &copy; 2020 - Dafa Berlian.</small>
      </div>
  </footer>
</body>

</html>
