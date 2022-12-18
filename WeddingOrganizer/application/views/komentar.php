<div id="content">
	<?php foreach ($blog as $key => $value): ?>
		<div class="blog-title bg-success text-light mt-3 mb-3 ps-3 pe-3 rounded pt-3 pb-3">
			<h2><strong><?php echo $value->judul ?></strong></h2><hr />
			<a class="text-warning" href="<?php echo base_url('/') ?>">Home / </a><a class="text-warning" href="<?php echo base_url('Blog') ?>">Blog / </a><a class="text-warning" href="<?php echo base_url('Blog/view/'.$value->id.'?'.$value->judul) ?>"><?php echo $value->judul ?> / </a>komentar
		</div>
	<?php endforeach ?>
	<style type="text/css">
		@media screen and (max-width:  767px){
			ol li, ol li h4{
				font-size: 12px;
			}
		}
	</style>
	<div>
		<ol>
			<?php foreach ($komentar as $key => $value): ?>
				<li class="border border-primary rounded ps-2 pt-1 m-2">
					<h4><strong><?php echo $value->komentar ?></strong></h4>
				</li>
			<?php endforeach ?>
		</ol>
	</div>
</div>