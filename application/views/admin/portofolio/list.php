<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portfolio - Dafa Berlian</title>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href=<?= base_url("public/img/favicon.ico")?> type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href=<?= base_url("public/hometown/css/style.css")?>>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
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
      <div class="container-fluid">
        <!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?= base_url('admin/portofolios/add') ?>" class="btn btn-primary">Add New</a>
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
											<a target="blank" href="<?= base_url('public/upload/portofolio/'.$portofolio->portofolio_pic) ?>"><img src="<?= base_url('public/upload/portofolio/'.$portofolio->portofolio_pic) ?>" width="80" /> </a>

										</td>
										<td class="small">
											<?= substr($portofolio->portofolio_desc, 0, 120) ?>...</td>
										<td width="250">
											<a href="<?= base_url('admin/portofolios/edit/'.$portofolio->portofolio_id) ?>" class="btn btn-warning">Edit</a>
											<a onclick="deleteConfirm('<?= site_url('admin/portofolios/delete/'.$portofolio->portofolio_id) ?>')" href="#!" class="btn btn-danger">Delete</a>
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
	
	<!-- Logout Delete Confirmation-->
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>This action cannot be undone</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
				</div>
			</div>
		</div>
	</div>
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
