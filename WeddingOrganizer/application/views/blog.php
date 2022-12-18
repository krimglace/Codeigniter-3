<div id="content">
	<div class="blog-title bg-home text-light mt-3 mb-3 ps-3 pe-3 rounded pt-3 pb-3">
		<h2><strong>Blog</strong></h2><hr />
		<a class="text-light" href="<?php echo base_url('/') ?>">Home / </a>Blog
	</div>
	<?php foreach ($blog as $key => $value): ?>
		<div class="blog-content">
			<div class="d-flex align-items-center">
				<div class="float-start col-5">
					<div class="p-2">
						<img src="<?php echo base_url('assets/mystyle/image/blog/'.$value->featured_image) ?>">
					</div>
				</div>
				<style type="text/css">
					@media screen and (max-width:  768px){
						.isiblog p{
							display: none;
						}
					}
				</style>
				<div class="float-start col-7 isiblog">
					<div class="p-2">
						<h2 style="margin-bottom: 0px;"><strong><?php echo $value->judul ?></strong></h2>
						<?php $text_potongan=substr($value->content, 0, 150); ?>
						<p style="margin-bottom: 0px;"><?php echo $text_potongan ?> ...</p>
						<small><?php echo $value->created_at ?></small><br />
						<a href="<?= base_url('blog/view/'.$value->id.'?'.$value->judul)?>" class="btn btn-primary">Baca Selengkapnya</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<hr>
		</div>
	<?php endforeach ?>
</div>