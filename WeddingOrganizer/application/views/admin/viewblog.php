<style type="text/css">
	@media screen and (max-width: 768px){
		.img-blog h5{
			font-size: 12px;
		}
	}
</style>
<div class="content content-off">
	<?= $this->session->flashdata('pesan') ?>
	<h4 class="ms-3"><strong>Lihat Blog</strong></h4>
	<a href="<?= base_url('Admin-Panel/Blog') ?>" class="btn btn-warning mt-2 ms-3">Kembali</a>
	<br> <br>
	<div class="container pt-4 pb-4" style="background-color: white;">
		<?php foreach ($blog as $b) : ?>
			<div class="img-blog ps-lg-5 ps-md-5 pe-lg-5 pe-md-5">
				<h2><strong><?php echo $b->judul ?></strong></h2>
				<img width="100%" style="border-radius: 20px; margin-bottom: 10px;" src="<?php echo base_url('assets/mystyle/image/blog/'.$b->featured_image) ?>"><br>
				<div class="float-start col-lg-4">
					<h5><i class="fas fa-user-circle me-3 ms-4"></i><?php echo $b->author ?></h5>
				</div>
				<div class="float-start col-lg-4">
					<h5><i class="fas fa-newspaper ms-4 me-3"></i><?php echo $b->kategori ?></h5>
				</div>
				<div class="float-start col-lg-4">
					<h5><i class="fas fa-calendar  ms-4 me-3"></i><?php echo $b->created_at ?></h5>
				</div>
				<div class="clearfix"></div>
				<hr>
				<div>
					<?php echo $b->content ?>
				</div>
			</div>
		<?php endforeach ?>
	</div>
	<br><br>
</div>