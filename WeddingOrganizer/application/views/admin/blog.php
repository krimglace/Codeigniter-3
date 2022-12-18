<div class="content content-off">
	<?= $this->session->flashdata('pesan') ?>
	<h4><strong>Blog</strong></h4>
	<a href="<?= base_url('Admin-Panel/Blog/tambah') ?>" class="btn btn-success mt-2">Tambah Data</a>
	<table class="table bg-light table-bordered mt-1">
		<tr>
			<th>Judul</th>
			<th>Update Terakhir</th>
			<th colspan="3">Aksi</th>
		</tr>
		<?php 
			$query = $this->db->get('blog');
			if($query->num_rows() > 0){
				foreach($blog as $b) : ?>
				<tr>
					<td><?= $b->judul ?></td>
					<td><?= $b->updated_at ?></td>
					<td>
						<a href="<?php echo('Blog/view/'.$b->id) ?>" class="btn btn-primary"><i class="fas fa-eye"></i></button>
					</td>
					<td>
						<a href="<?php echo('Blog/update/'.$b->id) ?>" class="btn btn-success"><i class="fas fa-pen"></i></button>
					</td>
					<td>
						<a href="<?php echo('Blog/delete/'.$b->id) ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
					</td>
				</tr>
				<?php endforeach;
			} else {
		?>
			<tr class="text-center">
				<td colspan="5"><em>No Data</em></td>
			</tr>
		<?php
			}
		?>
	</table>
</div>