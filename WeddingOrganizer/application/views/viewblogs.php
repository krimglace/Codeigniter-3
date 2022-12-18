<div id="content">
	<?= $this->session->flashdata('pesan') ?>
	<?php foreach ($blog as $key => $value): ?>
		<div class="blog-title bg-home text-light mt-3 mb-3 ps-3 pe-3 rounded pt-3 pb-3">
			<h2><strong><?php echo $value->judul ?></strong></h2><hr />
			<a class="text-light" href="<?php echo base_url('/') ?>">Home / </a><a class="text-light" href="<?php echo base_url('Blog') ?>">Blog / </a><?php echo $value->judul ?>
		</div>
		<div class="blog-content">
			<div class="blog-image">
				<img src="<?php echo base_url('assets/mystyle/image/blog/'.$value->featured_image) ?>">
			</div>
			<div class="float-start col-6">
				<small class="ms-lg-3 ms-md-3 ms-1">
					<i class="fas fa-calendar me-lg-3 me-md-3 me-1"></i><?php echo $value->created_at ?>
				</small><br />
				<small class="ms-lg-3 ms-md-3 ms-1">
					<i class="fas fa-eye me-lg-3 me-md-3 me-1"></i><?php echo $value->view + 1 ?>
					<a href="<?php echo base_url('Blog/viewKomentar/'.$value->id) ?>" class="text-dark"><i class="fas fa-message me-lg-3 me-md-3 me-1 ms-2"></i><?php echo $countblog->num_rows() ?></a>
				</small>
			</div>
			<div class="float-start col-6 text-end">
				<small class="me-lg-3 me-md-3 me-1"><i class="fas fa-list me-lg-3 me-md-3 me-1"></i><?php echo $value->kategori ?></small>
			</div>
			<div class="clearfix" style="margin-bottom: -10px;"></div>
			<hr>
			<div class="content-blog">
				<?php echo $value->content ?>
			</div>
			<hr>
			<form class="form-komentar" action="<?php echo base_url('Blog/komentar') ?>" method="post">
				<h2><strong>Tambahkan Komentar</strong></h2>
				<input type="hidden" name="id" value="<?php echo $value->id ?>">
				<div class="form-group">
					<textarea class="form-control" name="komentar" rows="3" placeholder="Komentar Anda" required></textarea>
				</div>
				<div class="form-group">
					<button class=" btn btn-primary mt-2 mb-2">Kirim</button>
				</div>
			</form>
		</div>
	<?php endforeach ?>
</div>