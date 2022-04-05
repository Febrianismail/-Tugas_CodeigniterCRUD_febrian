<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<h1 class="page-header text-center"> edit Angota Osis</h1>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<h3>Edit Form
					<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
				</h3>
				<hr>
				<?php extract($org); ?>
				<form method="POST" action="<?php echo base_url(); ?>index.php/organisasi/update/<?php echo $id; ?>">
					<div class="form-group">
						<label>Nama:</label>
						<input type="text" class="form-control" value="<?php echo $nama; ?>" name="nama">
					</div>
					<div class="form-group">
						<label>Divisi:</label>
						<input type="text" class="form-control" value="<?php echo $divisi; ?>" name="divisi">
					</div>
					<div class="form-group">
						<label>E-mail:</label>
						<input type="email" class="form-control" value="<?php echo $email; ?>" name="email">
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input type="text" class="form-control" value="<?php echo $password; ?>" name="password">
						<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
				</form>
			</div>
		</div>
	</div>

</body>

</html>