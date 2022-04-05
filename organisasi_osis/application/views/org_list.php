<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<h1 class="page-header text-center">Daftar Anggota Osis</h1>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<a href="<?php echo base_url(); ?>index.php/organisasi/dashboard" class="btn btn-primary"><span class="glyphicon glyphicon-plus"> Add New</span></a><br><br>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama</th>
							<th>Divisi</th>
							<th>E-mail</th>
							<th>Password</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($organisasi as $org) {
						?>
							<tr>
								<td><?php echo $org->id; ?></td>
								<td><?php echo $org->nama; ?></td>
								<td><?php echo $org->divisi; ?></td>
								<td><?php echo $org->email; ?></td>
								<td><?php echo $org->password; ?></td>
								<td><a href="<?php echo base_url(); ?>index.php/organisasi/edit/<?php echo $org->id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> || <a href="<?php echo base_url(); ?>index.php/organisasi/delete/<?php echo $org->id ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>

</html>