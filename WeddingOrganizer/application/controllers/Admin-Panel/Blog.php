<?php 

	/**
	 * 
	 */
	class Blog extends CI_Controller
	{

		public function index()
		{
			if($this->session->userdata('status')=="login"){

				$data['tentang'] = $this->Datamodel->tampilData('tentang_aplikasi')->result();
				$data['blog'] = $this->Datamodel->tampilData('blog')->result();

				$this->load->view('admin/sidebar', $data);
				$this->load->view('admin/blog', $data);
				$this->load->view('admin/footer', $data);

			} else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Harus Login !
							</div>');
					redirect('AdminLogin');
			}
		}
		public function tambah()
		{
			if($this->session->userdata('status')=="login"){

				$data['tentang'] = $this->Datamodel->tampilData('tentang_aplikasi')->result();
				$data['blog'] = $this->Datamodel->tampilData('blog')->result();

				$this->load->view('admin/sidebar', $data);
				$this->load->view('admin/tambahblog', $data);
				$this->load->view('admin/footer', $data);

			} else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Harus Login !
							</div>');
					redirect('AdminLogin');
			}
		}
		public function tambahData()
		{
			$judul = $this->input->post('judul');
			$kontent = $this->input->post('konten');
			$autor = $this->input->post('autor');
			$kategori = $this->input->post('kategori');
			$create = $this->input->post('create');

			$config['upload_path']		= "assets/mystyle/image/blog";
        	$config['allowed_types']	= 'jpg|jpeg|png|svg';
        	$this->load->library('Upload');
			$this->upload->initialize($config);

			$foto = $this->upload->do_upload('image');
			$file = $this->upload->data();

			$featured = $file['file_name'];
			if($kontent == '' || $kontent == null){
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Tidak Lengkap !
			 				</div>');
				redirect('Admin-Panel/Blog/tambah');
			}else{
				$data =	array(
					'judul' => $judul,
					'featured_image' => $featured,
					'content' => $kontent,
					'kategori' => $kategori,
					'author' => $autor,
					'created_at' => $create
				);
				$this->Datamodel->tambahData($data,'blog');

				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil di Tambahkan !
								</div>');
				redirect('Admin-Panel/Blog');
			}
		}
		public function view($values)
		{
			if($this->session->userdata('status')=="login"){
				$where = array(
					'id' => $values
				);
				$data['tentang'] = $this->Datamodel->tampilData('tentang_aplikasi')->result();
				$data['blog'] = $this->Datamodel->getWhere($where, 'blog')->result();

				$this->load->view('admin/sidebar', $data);
				$this->load->view('admin/viewblog', $data);
				$this->load->view('admin/footer', $data);

			} else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Harus Login !
							</div>');
					redirect('AdminLogin');
			}
		}
		public function update($values)
		{
			if($this->session->userdata('status')=="login"){
				$where = array(
					'id' => $values
				);
				$data['tentang'] = $this->Datamodel->tampilData('tentang_aplikasi')->result();
				$data['blog'] = $this->Datamodel->getWhere($where, 'blog')->result();

				$this->load->view('admin/sidebar', $data);
				$this->load->view('admin/editblog', $data);
				$this->load->view('admin/footer', $data);

			} else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Harus Login !
							</div>');
					redirect('AdminLogin');
			}
		}
		public function updateData()
		{
			$id = $this->input->post('id');
			$judul = $this->input->post('judul');
			$kontent = $this->input->post('konten');
			$autor = $this->input->post('autor');
			$kategori = $this->input->post('kategori');
			$create = $this->input->post('create');

			$config['upload_path']		= "assets/mystyle/image/blog";
        	$config['allowed_types']	= 'jpg|jpeg|png|svg';
        	$this->load->library('Upload');
			$this->upload->initialize($config);

			$foto = $this->upload->do_upload('image');
			$file = $this->upload->data();

			$featured = $file['file_name'];
			if($kontent == '' || $kontent == null){
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Tidak Lengkap !
			 				</div>');
				redirect('Admin-Panel/Blog/update');
			}elseif($featured == '' || $featured == null){
				$data =	array(
					'judul' => $judul,
					'content' => $kontent,
					'kategori' => $kategori,
					'author' => $autor,
					'created_at' => $create
				);
			}else{
				$data =	array(
					'judul' => $judul,
					'featured_image' => $featured,
					'content' => $kontent,
					'kategori' => $kategori,
					'author' => $autor,
					'created_at' => $create
				);
			}
				$where = array(
					'id' => $id
				);
				$this->Datamodel->updateData($where, $data,'blog');

				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil di Tambahkan !
								</div>');
				redirect('Admin-Panel/Blog');
		}
		public function delete($values)
		{
			$where = array(
				'id' => $values
			);
			
			$this->Datamodel->deleteData($where,'blog');
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Berhasil Dihapus !
							</div>');
			redirect('Admin-Panel/Blog');
		}

	}

?>