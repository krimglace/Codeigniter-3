
<div id="content" class=" pt-5">
	<div class="pt-5 text-center">
		<h4><strong>Apa Yang Sering Ditanyakan ?</strong></h4>
		<div class="faqs text-start">
			<?php foreach($faq as $f) : ?>
				<div class="mb-2">
					<div onclick="faqShow(<?= $f->id ?>)" class="bg-success pertanyaan rounded w-100 pb-2 ps-3 pt-3 text-light">
						<h5 class="float-start col-9"><?= $f->pertanyaan ?></h5>
						<i class="fas fa-circle-plus bukafaq float-end me-4 text-end col-2"></i>
						<div class="clearfix"></div>
					</div>
					<div class="bg-light jawaban<?= $f->id ?> rounded w-100 pb-2 ps-3 pt-3 d-none text-dark">
						<p><?= $f->jawaban ?></p>
						<div class="clearfix"></div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
		<br />
		<strong>Tidak menemukan jawaban atas pertanyaan anda?<br />Konsultasikan ke kami sekarang juga</strong><br />
		<?php foreach($tentang as $ttg) : ?>
	      <a href="https://wa.me/<?= $ttg->whatsapp ?>" class="btn btn-success ps-4 pe-4 mt-3">Konsultasi Sekarang</a>
	    <?php endforeach ?>
		
	</div>
	<br />
</div>
<script type="text/javascript">
	function faqShow(values){
		document.getElementsByClassName('jawaban'+values)[0].classList.toggle('d-none')
	}
</script>