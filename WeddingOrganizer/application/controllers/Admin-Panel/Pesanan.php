<?php 

	/**
	 * 
	 */
	class Pesanan extends CI_Controller
	{

		public function index()
		{
			if($this->session->userdata('status')=="login"){

				$data['tentang'] = $this->Datamodel->tampilData('tentang_aplikasi')->result();
				$data['pemesanan'] = $this->Datamodel->tampilData('pemesanan')->result();
				
				$this->load->view('admin/sidebar', $data);
				$this->load->view('admin/pemesanan', $data);
				$this->load->view('admin/footer', $data);

			} else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Harus Login !
							</div>');
					redirect('AdminLogin');
			}
		}
		public function delete($values)
		{
			$where = array(
				'id' => $values
			);
			
			$this->Datamodel->deleteData($where,'pemesanan');
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Berhasil Dihapus !
							</div>');
			redirect('Admin-Panel/Pesanan');
		}

	}

?>