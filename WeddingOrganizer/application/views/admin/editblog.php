<div class="content content-off">
	<?= $this->session->flashdata('pesan') ?>
	<h4 class="ms-3"><strong>Edit Blog</strong></h4>
	<a href="<?= base_url('Admin-Panel/Blog') ?>" class="btn btn-warning mt-2 ms-3">Kembali</a>
	<form action="<?php echo base_url('Admin-Panel/Blog/updateData') ?>" method="post" enctype="multipart/form-data">
		<?php foreach ($blog as $b): ?>	
			<div class="form-group col-lg-8 col-md-8 col-12 float-start ms-3 me-3">
				<input type="text" value="<?php echo $b->id ?>" name="id" required id="id" class="form-control">
				<label><strong>Judul Blog</strong></label>
				<input type="text" value="<?php echo $b->judul ?>" name="judul" required id="judul" class="form-control">
				
				<label><strong>Content</strong></label>
				<textarea id="ckeditor" class="ckeditor" name="konten" required><?php echo $b->content ?></textarea>
			</div>
			<div class="form-group col-lg-3 col-md-3 col-12 float-start ms-3 me-3">
				<div>
					<img src="<?php echo base_url('assets/mystyle/image/blog/'.$b->featured_image) ?>" id="imagefet" width="100%">
				</div>
				<label><strong>Featured Image</strong></label>
				<input type="file" name="image" id="image" class="form-control">

				<label><strong>Author</strong></label>
				<input type="text" name="autor" value="<?php echo $b->author ?>" required id="autor" class="form-control">

				<label><strong>Kategori</strong></label>
				<select value="<?php echo $b->kategori ?>" class="form-control" name="kategori">
					<option value="Makanan">Makanan</option>
					<option value="Unchategorized">Unchategorized</option>
				</select>

				<label><strong>Tanggal Dibuat</strong></label>
				<input type="datetime-local" name="create" value="<?php echo $b->created_at ?>" required id="create" class="form-control">
			</div>
			<div class="clearfix"></div>
		<?php endforeach ?>
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