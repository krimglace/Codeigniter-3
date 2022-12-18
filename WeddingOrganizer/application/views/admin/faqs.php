<div class="content content-off">
	<?= $this->session->flashdata('pesan') ?>
	<h4><strong>FAQ</strong></h4>
	<button class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</button>
	<table class="table bg-light table-bordered mt-1">
		<tr>
			<th>Pertanyaan</th>
			<th>Jawaban</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php 
			$query = $this->db->get('faq');
			if($query->num_rows() > 0){
				foreach($faq as $f) : ?>
				<tr id="kotakfaq<?= $f->id ?>">
					<td><?= $f->pertanyaan ?></td>
					<td><?= $f->jawaban ?></td>
					<td>
						<button onclick="faqedit(<?php echo $f->id; ?>)" class="btn btn-success"><i class="fas fa-pen"></i></button>
					</td>
					<td>
						<a href="<?php echo('Faqs/delete/'.$f->id) ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
					</td>
				</tr>
				<tr class="d-none" id="editfaq<?= $f->id ?>">
					<td colspan="2">
						<form action="<?php echo('Faqs/update') ?>" method="post">
							<input type="hidden" name="id" value="<?php echo $f->id ?>">
							<textarea class="form-control" name="pertanyaan"><?= $f->pertanyaan ?></textarea>
							<textarea class="form-control mt-1" name="jawaban"><?= $f->jawaban ?></textarea>
							<button type="submit" class="btn btn-primary mt-2">Simpan</button>
						</form>
					</td>
					<td colspan="2"><button onclick="faqeditclose(<?php echo $f->id; ?>)" class="btn btn-danger"><i class="fas fa-close"></i></button></td>
				</tr>
				<?php endforeach;
			} else {
		?>
			<tr class="text-center">
				<td colspan="4"><em>No Data</em></td>
			</tr>
		<?php
			}
		?>
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
        <form action="<?php echo('Faqs/tambah') ?>" method="post">
        	<div class="form-group">
        		<label>Pertanyaan</label>
        		<textarea class="form-control" name="pertanyaan"></textarea>
        	</div>
        	<div class="form-group">
        		<label>Jawaban</label>
        		<textarea class="form-control" name="jawaban"></textarea>
        	</div>
        <button type="submit" class="btn btn-primary mt-2">Save changes</button>
        </form><br />
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
	function faqedit(values)
	{
		document.getElementById('editfaq'+values).classList.remove('d-none')
		document.getElementById('kotakfaq'+values).classList.add('d-none')
	}
	function faqeditclose(values)
	{
		document.getElementById('editfaq'+values).classList.add('d-none')
		document.getElementById('kotakfaq'+values).classList.remove('d-none')
	}
</script>