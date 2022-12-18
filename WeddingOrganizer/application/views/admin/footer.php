
<div class="footer">
	<?php foreach($tentang as $ttg) : ?>
	  &copy; 2022 <?= $ttg->nama_aplikasi ?>
	<?php endforeach ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<script type="text/javascript">
	function cettogle(){
		document.getElementById('sidebar').classList.toggle('sidebaron')
		document.getElementById('sidebar').classList.toggle('sidebaroff')
		document.getElementById('clicktoggle').classList.toggle('togglenyala')
		document.getElementById('clicktoggle').classList.toggle('togglemati')
		document.getElementsByClassName('content')[0].classList.toggle('content-off')
		document.getElementsByClassName('content')[0].classList.toggle('content-on')
	}
	document.getElementById('clicktoggle').addEventListener('click', function(){
		console.log('hw')	
	})
</script>
</body>
</html>