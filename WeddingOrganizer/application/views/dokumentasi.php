<div id="content">
	<div class="blog-title bg-success text-light mt-3 mb-3 ps-3 pe-3 rounded pt-3 pb-3">
		<h2><strong>Dokumentasi</strong></h2><hr />
		<a class="text-warning" href="<?php echo base_url('/') ?>">Home / </a>Dokumentasi
	</div>
	<div class="blog-content">
			<?php foreach ($galeri as $key => $value): ?>
				<div class="float-start col-lg-3 col-md-3 col-6 image-dokumentasi">
					<div class="p-2">
						<img src="<?php echo base_url('assets/mystyle/image/galeri/'.$value->gambar) ?>">
					</div>
				</div>
			<?php endforeach ?>
		<div class="clearfix"></div>
	</div>
</div>