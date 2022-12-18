<?php 

	/**
	 * 
	 */
	class Tentang extends CI_Controller
	{

		public function index()
		{
			if($this->session->userdata('status')=="login"){

				$data['tentang'] = $this->Datamodel->tampilData('tentang_aplikasi')->result();

				$this->load->view('admin/sidebar', $data);
				$this->load->view('admin/tentang', $data);
				$this->load->view('admin/footer', $data);

			} else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Harus Login !
							</div>');
					redirect('AdminLogin');
			}
		}
		public function update()
		{
			$nama = $this->input->post('nama');
			$whatsapp = $this->input->post('whatsapp');
			$lokasi = $this->input->post('lokasi');
			$instagram = $this->input->post('instagram');
			$facebook = $this->input->post('facebook');
			$dokumentasi = $this->input->post('dokumentasi');
			$blog = $this->input->post('blog');

			if($lokasi == ''){				
				$data =	array(
					'nama_aplikasi' => $nama,
					'whatsapp' => $whatsapp,
					'link_instagram' => $instagram,
					'link_facebook' => $facebook,
					'link_dokumentasi' => $dokumentasi,
					'link_blog' => $blog
				);
			} else {
				$data =	array(
					'nama_aplikasi' => $nama,
					'whatsapp' => $whatsapp,
					'lokasi' => $lokasi,
					'link_instagram' => $instagram,
					'link_facebook' => $facebook,
					'link_dokumentasi' => $dokumentasi,
					'link_blog' => $blog
				);
			}
			$where = array(
				'id' => 1
			);
			
			$this->Datamodel->updateData($where, $data,'tentang_aplikasi');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Diupdate !
							</div>');
			redirect('Admin-Panel/Tentang');
		}

	}

?>