<?php 

	/**
	 * 
	 */
	class Home extends CI_Controller
	{

		public function index()
		{
			if($this->session->userdata('status')=="login"){

				$data['tentang'] = $this->Datamodel->tampilData('tentang_aplikasi')->result();
				$data['paket'] = $this->Datamodel->paket_where('paket')->result();
				$data['ketpaket'] = $this->Datamodel->paket_not_where('paket')->result();
				$data['promo'] = $this->Datamodel->tampilData('promo')->result();
				$data['banner'] = $this->Datamodel->tampilData('banner_slider')->result();
				$data['galeri'] = $this->Datamodel->tampilData('galeri')->result();
				$this->load->view('admin/sidebar', $data);
				$this->load->view('admin/home', $data);
				$this->load->view('admin/footer', $data);
			} else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Harus Login !
							</div>');
					redirect('AdminLogin');
			}
		}
		public function updatepaket()
		{
			$harga = $this->input->post('harga');
			$banyak = $this->input->post('banyak');
			$termasuk = $this->input->post('termasuk');
			$id = $this->input->post('id');
	
			$data =	array(
				'harga_paket' => $harga,
				'banyak_paket' => $banyak,
				'harga_termasuk' => $termasuk
			);
			$where = array(
				'id' => $id
			);
			
			$this->Datamodel->updateData($where, $data,'paket');

			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil di Update !
							</div>');
			redirect('Admin-Panel/Home');
		}
		public function updatepromo()
		{
			$bulan = $this->input->post('bulan');
			$nama = $this->input->post('nama');
			$promo = $this->input->post('promo');
			$mulai = $this->input->post('mulai');
			$selesai = $this->input->post('selesai');
			$id = $this->input->post('id');
	
			$data =	array(
				'bulan_promo' => $bulan,
				'nama_promo' => $nama,
				'promo' => $promo,
				'mulai_promo' => $mulai,
				'selesai_promo' => $selesai
			);
			$where = array(
				'id' => $id
			);
			
			$this->Datamodel->updateData($where, $data,'promo');

			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil di Update !
							</div>');
			redirect('Admin-Panel/Home');
		}
		public function tambahgaleri()
		{

			$config['upload_path']		= "assets/mystyle/image/galeri";
        	$config['allowed_types']	= 'jpg|jpeg|png|svg';
        	$this->load->library('Upload');
			$this->upload->initialize($config);

			$foto = $this->upload->do_upload('foto3');
			$file = $this->upload->data();

			$featured = $file['file_name'];
			if($featured == '' || $featured == null){
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Tidak ada foto yang diupload !
			 				</div>');
				redirect('Admin-Panel/Home');
			}else{
				$data =	array(
					'gambar' => $featured
				);
				$this->Datamodel->tambahData($data,'galeri');

				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil di Tambahkan !
								</div>');
				redirect('Admin-Panel/Home');
			}
		}
		public function tambahbanner()
		{

			$config['upload_path']		= "assets/mystyle/image/banner";
        	$config['allowed_types']	= 'jpg|jpeg|png|svg';
        	$this->load->library('Upload');
			$this->upload->initialize($config);

			$foto = $this->upload->do_upload('foto4');
			$file = $this->upload->data();

			$featured = $file['file_name'];
			if($featured == '' || $featured == null){
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Tidak ada foto yang diupload !
			 				</div>');
				redirect('Admin-Panel/Home');
			}else{
				$data =	array(
					'nama_foto' => $featured
				);
				$this->Datamodel->tambahData($data,'banner_slider');

				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil di Tambahkan !
								</div>');
				redirect('Admin-Panel/Home');
			}	
		}

		public function updategaleri()
		{
			$id = $this->input->post('id');

			$config['upload_path']		= "assets/mystyle/image/galeri";
        	$config['allowed_types']	= 'jpg|jpeg|png|svg';
        	$this->load->library('Upload');
			$this->upload->initialize($config);

			$foto = $this->upload->do_upload('foto2');
			$file = $this->upload->data();

			$featured = $file['file_name'];
			if($featured == '' || $featured == null){
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Tidak ada foto yang diupload !
			 				</div>');
				redirect('Admin-Panel/Home');
			}else{
				$data =	array(
					'gambar' => $featured
				);
				$where = array(
					'id' => $id
				);
				$this->Datamodel->updateData($where, $data,'galeri');

				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil di Update !
								</div>');
				redirect('Admin-Panel/Home');
			}
		}
		public function updatebanner()
		{
			$id = $this->input->post('id');

			$config['upload_path']		= "assets/mystyle/image/banner";
        	$config['allowed_types']	= 'jpg|jpeg|png|svg';
        	$this->load->library('Upload');
			$this->upload->initialize($config);

			$foto = $this->upload->do_upload('foto');
			$file = $this->upload->data();

			$featured = $file['file_name'];
			if($featured == '' || $featured == null){
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Tidak ada foto yang diupload !
			 				</div>');
				redirect('Admin-Panel/Home');
			}else{
				$data =	array(
					'nama_foto' => $featured
				);
				$where = array(
					'id' => $id
				);
				$this->Datamodel->updateData($where, $data,'banner_slider');

				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil di Update !
								</div>');
				redirect('Admin-Panel/Home');
			}	
		}

		public function deletebanner($values)
		{
			$where = array(
				'id' => $values
			);
			
			$this->Datamodel->deleteData($where,'banner_slider');
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Berhasil Dihapus !
							</div>');
			redirect('Admin-Panel/Home');	
		}
		public function deletegaleri($values)
		{
			$where = array(
				'id' => $values
			);
			
			$this->Datamodel->deleteData($where,'galeri');
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Berhasil Dihapus !
							</div>');
			redirect('Admin-Panel/Home');	
		}

	}

?>