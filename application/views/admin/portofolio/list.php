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
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
	<script src="https://use.fontawesome.com/9f04ecd84f.js"></script>
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
        <!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?= base_url('admin/portofolios/add') ?>" class="btn btn-primary btn-block">Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Date</th>
										<th>Picture</th>
										<th>Description</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($portofolios as $portofolio): ?>
									<tr>
										<td width="150">
											<?= $portofolio->portofolio_name ?>
										</td>
										<td>
											<?= $portofolio->portofolio_date ?>
										</td>
										<td>
											<img src="<?= base_url('public/upload/portofolio/'.$portofolio->portofolio_pic) ?>" width="64" />
										</td>
										<td class="small">
											<?= substr($portofolio->portofolio_desc, 0, 120) ?>...</td>
										<td width="250">
											<a href="<?= base_url('admin/portofolios/edit/'.$portofolio->portofolio_id) ?>" class="btn btn-warning btn-block">Edit</a>
											<a onclick="deleteConfirm('<?= base_url('admin/portofolios/delete/'.$portofolio->portofolio_id) ?>')" href="#!" class="btn btn-danger btn-block">Delete</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
      </div>
  </section>

  <footer>
      <div class="container">
          <small>Copyright &copy; 2020 - Dafa Berlian.</small>
      </div>
  </footer>
<script>
	$(document).ready( function () {
    $('#dataTable').DataTable();
} );

function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>
</body>

</html>
