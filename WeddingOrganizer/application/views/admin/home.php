<style type="text/css">
	.home{
		background-color: white;
		border-radius: 10px;
		cursor: pointer;
	}
	.homeshow{
		background-color: white;
	}
</style>
<div class="content content-off">
	<?= $this->session->flashdata('pesan') ?>
	<div class="home mt-2 p-2" id="homebanner">
		<h4 id="banner"><strong>Banner Slider</strong></h4>
	</div>
	<div class="d-none homeshow" id="homebannershow">
		<button class="btn btn-success mt-2 ms-3" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahbanner">Tambah Banner</button>
		<table class="table table-stripped table-bordered mt-2">
			<tr>
				<th>Foto Banner</th>
				<th>Aksi</th>
			</tr>
			<?php foreach ($banner as $bnr): ?>
				<tr id="kotakbanner<?= $bnr->id ?>">
					<td><img src="<?php echo base_url('assets/mystyle/image/banner/'.$bnr->nama_foto) ?>" width="25%"></td>
					<td>
						<button onclick="banneredit(<?php echo $bnr->id; ?>)" class="btn btn-success"><i class="fas fa-pen"></i></button>
						<a href="<?php echo('Home/deletebanner/'.$bnr->id) ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
					</td>
				</tr>
				<tr class="d-none" id="editbanner<?= $bnr->id ?>">
					<td>
						<form action="<?php echo('Home/updatebanner') ?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php echo $bnr->id ?>">
							<input class="form-control" type="file" name="foto" />
							<button type="submit" class="btn btn-primary mt-2">Simpan</button>
						</form>
					</td>
					<td><button onclick="bannereditclose(<?php echo $bnr->id; ?>)" class="btn btn-danger"><i class="fas fa-close"></i></button></td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
	<div class="home mt-2 p-2" id="homegaleri">
		<h4><strong>Dokumentasi</strong></h4>
	</div>
	<div class="d-none homeshow" id="homegalerishow">
		<button class="btn btn-success mt-2 ms-3" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahgaleri">Tambah Gambar</button>
		<table class="table table-stripped table-bordered mt-2">
			<tr>
				<th>Foto Galeri</th>
				<th>Aksi</th>
			</tr>
			<?php foreach ($galeri as $glr): ?>
				<tr id="kotakgaleri<?= $glr->id ?>">
					<td><img src="<?php echo base_url('assets/mystyle/image/galeri/'.$glr->gambar) ?>" width="25%"></td>
					<td>
						<button onclick="galeriedit(<?php echo $glr->id; ?>)" class="btn btn-success"><i class="fas fa-pen"></i></button>
						<a href="<?php echo('Home/deletegaleri/'.$glr->id) ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
					</td>

				</tr>
				<tr class="d-none" id="editgaleri<?= $glr->id ?>">
					<td>
						<form action="<?php echo('Home/updategaleri') ?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php echo $glr->id ?>">
							<input class="form-control" type="file" name="foto2" />
							<button type="submit" class="btn btn-primary mt-2">Simpan</button>
						</form>
					</td>
					<td><button onclick="galerieditclose(<?php echo $glr->id; ?>)" class="btn btn-danger"><i class="fas fa-close"></i></button></td>
					<td></td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
	<div class="home mt-2 p-2" id="homepaket">
		<h4><strong>Paket</strong></h4>
	</div>
	<div class="d-none homeshow" id="homepaketshow">
		<table class="table table-stripped table-bordered mt-2">
			<tr>
				<th>Harga Paket</th>
				<th>Banyak Paket</th>
				<th>Aksi</th>
			</tr>
			<?php foreach ($paket as $pkt): ?>
				<tr id="kotakpaket<?= $pkt->id ?>">
					<td><?php echo $pkt->harga_paket ?></td>
					<td><?php echo $pkt->banyak_paket ?></td>
					<td>
						<button onclick="paketedit(<?php echo $pkt->id; ?>)" class="btn btn-success"><i class="fas fa-pen"></i></button>
					</td>
				</tr>
				<tr class="d-none" id="editpaket<?= $pkt->id ?>">
					<td colspan="2">
						<form action="<?php echo('Home/updatepaket') ?>" method="post">
							<input type="hidden" name="id" value="<?php echo $pkt->id ?>">
							<label>Harga</label>
							<input class="form-control" name="harga" value="<?= $pkt->harga_paket ?>" />
							<label>Banyak</label>
							<input class="form-control" name="banyak" value="<?= $pkt->banyak_paket ?>" />
							<button type="submit" class="btn btn-primary mt-2">Simpan</button>
						</form>
					</td>
					<td><button onclick="paketeditclose(<?php echo $pkt->id; ?>)" class="btn btn-danger"><i class="fas fa-close"></i></button></td>
				</tr>
			<?php endforeach ?>
			<tr>
				<th colspan="3">Harga Sudah Termasuk</th>
			</tr>
			<?php foreach ($ketpaket as $kpkt): ?>
				<tr id="kotakpaket<?= $kpkt->id ?>">
					<td colspan="2"><?php echo $kpkt->harga_termasuk ?></td>
					<td>
						<button onclick="paketedit(<?php echo $kpkt->id; ?>)" class="btn btn-success"><i class="fas fa-pen"></i></button>
					</td>
				</tr>
				<tr class="d-none" id="editpaket<?= $kpkt->id ?>">
					<td colspan="2">
						<form action="<?php echo('Home/updatepaket') ?>" method="post">
							<input type="hidden" name="id" value="<?php echo $kpkt->id ?>">
							<textarea class="form-control" name="termasuk"><?= $kpkt->harga_termasuk ?></textarea>
							<button type="submit" class="btn btn-primary mt-2">Simpan</button>
						</form>
					</td>
					<td><button onclick="paketeditclose(<?php echo $kpkt->id; ?>)" class="btn btn-danger"><i class="fas fa-close"></i></button></td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
	<div class="home mt-2 p-2" id="homepromo">
		<h4><strong>Promo</strong></h4>
	</div>
	<div class="d-none homeshow" id="homepromoshow">
		<table class="table table-stripped table-bordered mt-2">
			<tr>
				<th>Promo</th>
				<th>Selesai Promo</th>
				<th>Aksi</th>
			</tr>
			<?php foreach ($promo as $prm): ?>
				<tr id="kotakpromo<?= $prm->id ?>">
					<td><?php echo $prm->promo ?></td>
					<td><?php echo $prm->selesai_promo ?></td>
					<td>
						<button onclick="promoedit(<?php echo $prm->id; ?>)" class="btn btn-success"><i class="fas fa-pen"></i></button>
					</td>
				</tr>
				<tr class="d-none" id="editpromo<?= $prm->id ?>">
					<td colspan="2">
						<form action="<?php echo('Home/updatepromo') ?>" method="post">
							<input type="hidden" name="id" value="<?php echo $prm->id ?>">
							<label>Bulan Promo</label>
							<input class="form-control" name="bulan" value="<?= $prm->bulan_promo ?>" />
							<label>Nama Promo</label>
							<input class="form-control" name="nama" value="<?= $prm->nama_promo ?>" />
							<label>Promo</label>
							<input class="form-control" name="promo" value="<?= $prm->promo ?>" />
							<label>Mulai Promo</label>
							<input type="datetime-local" class="form-control" name="mulai" value="<?= $prm->mulai_promo ?>" />
							<label>Selesai Promo</label>
							<input type="datetime-local" class="form-control" name="selesai" value="<?= $prm->selesai_promo ?>" />
							<button type="submit" class="btn btn-primary mt-2">Simpan</button>
						</form>
					</td>
					<td><button onclick="promoeditclose(<?php echo $prm->id; ?>)" class="btn btn-danger"><i class="fas fa-close"></i></button></td>
				</tr>
			<?php endforeach ?>
			
		</table>
	</div>
</div>
<br /><br />
<div class="modal fade" id="tambahbanner" tabindex="-1" role="dialog" aria-labelledby="tambahbannerLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahbannerLabel">Tambah Banner</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo('Home/tambahbanner') ?>" method="post" enctype="multipart/form-data">
        	<div class="form-group">
        		<label>Foto</label>
        		<input type="file" name="foto4" class="form-control">
        	</div>
        <button type="submit" class="btn btn-primary mt-2">Save changes</button>
        </form><br />
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="tambahgaleri" tabindex="-1" role="dialog" aria-labelledby="tambahgaleriLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahgaleriLabel">Tambah Galeri</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo('Home/tambahgaleri') ?>" method="post" enctype="multipart/form-data">
        	<div class="form-group">
        		<label>Foto</label>
        		<input type="file" name="foto3" class="form-control">
        	</div>
        <button type="submit" class="btn btn-primary mt-2">Save changes</button>
        </form><br />
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	function paketedit(values)
	{
		document.getElementById('editpaket'+values).classList.remove('d-none')
		document.getElementById('kotakpaket'+values).classList.add('d-none')
	}
	function paketeditclose(values)
	{
		document.getElementById('editpaket'+values).classList.add('d-none')
		document.getElementById('kotakpaket'+values).classList.remove('d-none')
	}
	function promoedit(values)
	{
		document.getElementById('editpromo'+values).classList.remove('d-none')
		document.getElementById('kotakpromo'+values).classList.add('d-none')
	}
	function promoeditclose(values)
	{
		document.getElementById('editpromo'+values).classList.add('d-none')
		document.getElementById('kotakpromo'+values).classList.remove('d-none')
	}
	function banneredit(values)
	{
		document.getElementById('editbanner'+values).classList.remove('d-none')
		document.getElementById('kotakbanner'+values).classList.add('d-none')
	}
	function bannereditclose(values)
	{
		document.getElementById('editbanner'+values).classList.add('d-none')
		document.getElementById('kotakbanner'+values).classList.remove('d-none')
	}
	function galeriedit(values)
	{
		document.getElementById('editgaleri'+values).classList.remove('d-none')
		document.getElementById('kotakgaleri'+values).classList.add('d-none')
	}
	function galerieditclose(values)
	{
		document.getElementById('editgaleri'+values).classList.add('d-none')
		document.getElementById('kotakgaleri'+values).classList.remove('d-none')
	}


	document.getElementById('homepaket').addEventListener('click', function(){
		document.getElementById('homepaketshow').classList.toggle('d-none')
	})
	document.getElementById('homepromo').addEventListener('click', function(){
		document.getElementById('homepromoshow').classList.toggle('d-none')
	})
	document.getElementById('homebanner').addEventListener('click', function(){
		document.getElementById('homebannershow').classList.toggle('d-none')
	})
	document.getElementById('homegaleri').addEventListener('click', function(){
		document.getElementById('homegalerishow').classList.toggle('d-none')
	})
</script>