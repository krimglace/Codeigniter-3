<div class="content content-off">
	<?= $this->session->flashdata('pesan') ?>
	<h4 class="ms-3"><strong>Tambah Blog</strong></h4>
	<a href="<?= base_url('Admin-Panel/Blog') ?>" class="btn btn-warning mt-2 ms-3">Kembali</a>
	<form action="<?php echo base_url('Admin-Panel/Blog/tambahData') ?>" method="post" enctype="multipart/form-data">
		<div class="form-group col-lg-8 col-md-8 col-12 float-start ms-3 me-3">
			<label><strong>Judul Blog</strong></label>
			<input type="text" name="judul" required id="judul" class="form-control">
			
			<label><strong>Content</strong></label>
			<textarea id="ckeditor" class="ckeditor" name="konten" required></textarea>
		</div>
		<div class="form-group col-lg-3 col-md-3 col-12 float-start ms-3 me-3">
			<div>
				<img src="" id="imagefet" width="100%">
			</div>
			<label><strong>Featured Image</strong></label>
			<input type="file" name="image" required id="image" class="form-control">

			<label><strong>Author</strong></label>
			<input type="text" name="autor" required id="autor" class="form-control">

			<label><strong>Kategori</strong></label>
			<select class="form-control" name="kategori">
				<option value="Unchategorized">Unchategorized</option>
			</select>

			<label><strong>Tanggal Dibuat</strong></label>
			<input type="datetime-local" name="create" required id="create" class="form-control">
		</div>
		<div class="clearfix"></div>
		<button type="submit" class="btn btn-primary ms-3 mt-3 form-control">Simpan</button>
	</form>
	<br><br>
</div>
<script type="text/javascript">
	var imagefet = document.getElementById("imagefet")
	var file = document.getElementById("image");

	file.addEventListener('change', function () {
        gambar(this);
    })
     function gambar(a) {
        if (a.files && a.files[0]) {     
            var reader = new FileReader();    
            reader.onload = function (e) {
                imagefet.src=e.target.result;
            }    
            reader.readAsDataURL(a.files[0]);
        }
    }
</script>