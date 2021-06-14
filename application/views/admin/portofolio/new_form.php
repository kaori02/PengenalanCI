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
					<form action="<?= site_url('admin/portofolios/add') ?>" method="post" enctype="multipart/form-data" >
						<div class="form-group">
							<label for="name">Name <span style="color: red;">*</span></label>
							<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
							type="text" name="name" placeholder="Product name" />
							<div class="invalid-feedback">
								<?php echo form_error('name') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="price">Price <span style="color: red;">*</span></label>
							<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
							type="number" name="price" min="0" placeholder="Product price" />
							<div class="invalid-feedback">
								<?php echo form_error('price') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="name">Photo</label>
							<input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>"
							type="file" name="image" />
							<div class="invalid-feedback">
								<?php echo form_error('image') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="name">Description <span style="color: red;">*</span></label>
							<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
							name="description" placeholder="Product description..."></textarea>
							<div class="invalid-feedback">
								<?php echo form_error('description') ?>
							</div>
						</div>

						<input class="btn btn-success" type="submit" name="btn" value="Save" />
					</form>

				</div>

				<div class="card-footer small text-muted">
					* required fields
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
