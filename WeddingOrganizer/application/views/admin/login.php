<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="wedding organizer">
    <meta name="author" content="Zero">

    <link rel="stylesheet" type="text/css" href=<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>>
   	<link rel="stylesheet" type="text/css" href=<?= base_url('assets/mystyle/css/style.css') ?>>

   	<?php foreach($tentang as $ttg) : ?>
    <title><?= $ttg->nama_aplikasi ?></title>
	<?php endforeach ?>
    <style type="text/css">
    	.loginpage{
			width: 100%;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			background-image: url(<?= base_url('assets/mystyle/image/bglaut.jpg') ?>);
			background-repeat: no-repeat;
			background-size: 100% 100%;

		}
		.loginpage form{
			min-width: 30%;
			border-radius: 10px;
			background-color: #479ACB;
		}
    </style>
</head>
<body>
	<div class="loginpage">
		<form class="border border-secondary p-3 text-light" method="post" action="<?= base_url('AdminLogin/proses_login') ?>">
			<?= $this->session->flashdata('pesan') ?>
			<h3>
				<strong>Login Admin</strong>
			</h3>
			<hr />
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control">
				<?= form_error('email', '<div class="text-danger small ml-3">','</div>') ?>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
				<?= form_error('password', '<div class="text-danger small ml-3">','</div>') ?>
			</div><br />
			<div class="form-group">
				<input type="submit" value="Login" class="form-control btn btn-primary">
			</div>
		</form>
	</div>
</body>
</html>