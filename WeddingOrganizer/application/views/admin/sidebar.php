<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Zero">
    
	<link rel="stylesheet" type="text/css" href=<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>>
   	<link rel="stylesheet" type="text/css" href=<?= base_url('assets/mystyle/css/style.css') ?>>

   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" referrerpolicy="no-referrer" />

   	<?php foreach($tentang as $ttg) : ?>
      <title><?= $ttg->nama_aplikasi ?></title>
    <?php endforeach ?>

	<style type="text/css">
		#sidebar {
		    width: 260px;
		    min-height: 100vh;
		    position: fixed;
		    /*background: red;*/
		    border-right: 1px solid black;
		    background-color: white;
		    z-index: 100;
		}
		.sidebaroff{
			animation: sideOff;
			animation-duration: .5s;x`
		}
		.sidebaron{
			animation: sideOn;
			animation-duration: .5s;
			transform: translateX(-260px);
		}
		.togglemati{
			margin-left: 270px;
			animation: toggleOff;
			animation-duration: .5s;
			position: fixed;
			z-index: 100;
			cursor: pointer;
		}
		.togglenyala{
			cursor: pointer;
			z-index: 100;
			animation: toggleOn;
			animation-duration: .5s;
			margin-left: 10px;
			position: fixed;
		}
		@keyframes sideOn {
			from{
				transform: translateX(0);
			} to {
				transform: translateX(-260px);
			}	
		}
		@keyframes sideOff {
			from{
				transform: translateX(-260px);
			} to {
				transform: translateX(0);
			}	
		}
		@keyframes toggleOn{
			from{
				margin-left: 270px;
			} to {
				margin-left: 10px;
			}
		}
		@keyframes toggleOff{
			from{
				margin-left: 10px;
			} to {
				margin-left: 270px;
			}
		}
		.menu div, .menu a{
			width: 80%;
			padding: 5px;
			margin: 0 10%;
			cursor: pointer;
			color: black;
			transition: .5s;
			font-weight: 400;
		}
		.menu div{
			border-bottom: 1px solid black;
			margin-bottom: 5px;
		}
		.menu div:hover{
			transition: .5s;
			background-color: gray;
		}
		.menu div:hover > a{
			color: white;
		}
		.footer{
			text-align: center;
			background-color: black;
			color: white;
			position: fixed;
			bottom: 0;
			width: 100%;
		}
		header{
			width: 100%;
			height: 30px;
			position: fixed;
			top: 0;
			z-index: 10;	
			border-bottom: 1px solid black;
			background-color: white;
		}
		body{
			background-color: whitesmoke;
		}
		@media screen and (min-width: 768px)
		{
			.content-off{
				padding-top: 40px;
				margin-left: 270px;
				margin-right: 5%;
				animation: contentOff;
				animation-duration: .5s;
			}
			.content-on{
				padding-top: 40px;
				margin-left: 5%;
				margin-right: 10%;
				animation: contentOn;
				animation-duration: .5s;
			}
		}
		@media screen and (max-width: 768px)
		{
			.content{
				padding-top: 40px;
				margin-left: 5%;
				margin-right: 5%;
			}
		}
		@keyframes contentOn {
			from{
				margin-left: 270px;
			} to {
				margin-left: 5%;
			}	
		}
		@keyframes contentOff {
			from{
				margin-left: 5%;
			} to {
				margin-left: 270px;
			}	
		}
	</style>


</head>
<body>

<div id="wrapper">
	<div id="sidebar" class="sidebaroff">
		<div class="text-center mt-1">
			<img src="<?= base_url('assets/mystyle/image/logo.jpg') ?>">
		</div>
		<div class="menu">
			<div>
				<a href="<?= base_url('Admin-Panel/Home') ?>"><i class="fas fa-house me-3"></i> Home</a>
			</div>
			<div>
				<a href="<?= base_url('Admin-Panel/Faqs') ?>"><i class="fas fa-question-circle me-3"></i> Faqs</a>
			</div>
			<div>
				<a href="<?= base_url('Admin-Panel/Tentang') ?>"><i class="fas fa-info-circle me-3"></i> Tentang</a>
			</div>
			<div>
				<a href="<?= base_url('Admin-Panel/Pesanan') ?>"><i class="fas fa-message me-3"></i> Pemesanan</a>
			</div>
			<div>
				<a href="<?= base_url('Admin-Panel/Blog') ?>"><i class="fas fa-newspaper me-3"></i> Blog</a>
			</div>
			<div>
				<a href="<?= base_url('AdminLogin/logout') ?>"><i class="fas fa-right-from-bracket me-3"></i> Logout</a>
			</div>
		</div>
	</div>
	<i class="fas fa-bars togglemati mt-2" id="clicktoggle" onclick="cettogle()"></i>
	<header></header>
</div>