<div class="alert alert-success alert-dismissible fade show" role="alert">
	Data Berhasil Dikirim !
</div>
<div class="text-center mb-5">
	<?php foreach($tentang as $ttg) : ?>
	<img src="<?php echo base_url('assets/mystyle/image/logo.jpg') ?>" class="kontakimg">
	<div class="kontak">
		Silahkan klik tombol dibawah untuk langsung chat dan bertanya dengan CS kami melalui whatsapp <br /><br />
		<a href="https://wa.me/62<?= $ttg->whatsapp ?>" class="ps-4 pe-4 pt-2 pb-2 rounded-pill btn-success"><i class="fab fa-whatsapp me-2"></i> Whatsapp</a> <br /><br />
		Kamu juga bisa follow facebook kami di <br /><br />
		<a href="<?= $ttg->link_facebook ?>" class="ps-4 pe-4 pt-2 pb-2 rounded-pill btn-primary"><i class="fab fa-facebook me-2"></i> Facebook</a><br /><br />
		Atau follow instagram kami untuk mendapatkan info yang menarik <br /><br />
		<a href="<?= $ttg->link_instagram ?>" class="ps-4 pe-4 pt-2 pb-2 rounded-pill btn-danger"><i class="fab fa-instagram me-2"></i> Instagram</a><br /><br />
	</div>
	<div class="ms-lg-5 me-lg-5 ms-md-5 me-md-5 me-3 ms-3">
		<?php echo $ttg->lokasi ?>
	</div>
    <?php endforeach ?>
</div>