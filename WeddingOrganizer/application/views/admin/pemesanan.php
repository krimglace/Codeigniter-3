<div class="content content-off">
	<?= $this->session->flashdata('pesan') ?>
	<h4><strong>Daftar Pesanan</strong></h4>
	<table class="table bg-light table-bordered mt-1">
		<tr>
			<th>Nama</th>
			<th>No. Hp</th>
			<th>Rencana Pemesanan</th>
			<th>Aksi</th>
		</tr>
		<?php 
			$query = $this->db->get('pemesanan');
			if($query->num_rows() > 0){
				foreach($pemesanan as $pemes) : ?>
				<tr id="kotakfaq<?= $pemes->id ?>">
					<td><?= $pemes->nama ?></td>
					<td><?= $pemes->nomor_handphone ?></td>
					<td><?= $pemes->rencana ?></td>
					<td>
						<a href="<?php echo('Pesanan/delete/'.$pemes->id) ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
					</td>
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