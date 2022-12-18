<style type="text/css">
	iframe{
		width: 100%;
	}
</style>
<div class="content content-off">
	<?= $this->session->flashdata('pesan') ?>
	<h4><strong>Tentang Website</strong></h4>
	<button class="btn btn-success mt-2" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Update Data</button>
	<table class="table bg-light table-bordered mt-1">
		<?php foreach($tentang as $ttg) : ?>
		<tr>
			<th>Nama Aplikasi</th>
			<td><?= $ttg->nama_aplikasi ?></td>
		</tr>
		<tr>
			<th>Whatsapp</th>
			<td>+62<?= $ttg->whatsapp ?></td>
		</tr>
		<tr>
			<th>Lokasi</th>
			<td><?= $ttg->lokasi ?></td>
		</tr>
		<tr>
			<th>Instagram</th>
			<td><?= $ttg->link_instagram ?></td>
		</tr>
		<tr>
			<th>Facebook</th>
			<td><?= $ttg->link_facebook ?></td>
		</tr>
		<?php endforeach ?>
	</table>
	<br />
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo('Tentang/update') ?>" method="post">
        	<?php foreach($tentang as $ttg) : ?>
        		<label>Nama Aplikasi</label>
        		<input type="text" name="nama" class="form-control" value="<?php echo $ttg->nama_aplikasi ?>">
        		<label>Nomor Whatsapp</label>
        		<div class="input-group">
						  <span class="input-group-text" id="basic-addon1">+62</span>
						  <input type="number" class="form-control" name="whatsapp" value="<?php echo $ttg->whatsapp ?>">
						</div>
        		<label>Lokasi</label>
        		<input type="text" name="lokasi" class="form-control" placeholder="(Ambil dalam tag iframe pada google maps)" >
        		<label>Instagram</label>
        		<input type="text" name="instagram" class="form-control" value="<?php echo $ttg->link_instagram ?>">
        		<label>Facebook</label>
        		<input type="text" name="facebook" class="form-control" value="<?php echo $ttg->link_facebook ?>">
        		<label>Dokumentasi</label>
        		<input type="text" name="dokumentasi" class="form-control" value="<?php echo $ttg->link_dokumentasi ?>">
        		<label>Blog</label>
        		<input type="text" name="blog" class="form-control" value="<?php echo $ttg->link_blog ?>">
        	<?php endforeach ?><br />
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form><br />
      </div>
    </div>
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>