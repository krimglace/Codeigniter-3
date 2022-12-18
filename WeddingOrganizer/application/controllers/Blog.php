<?php 

	class Blog extends CI_Controller
	{
		public function index()
		{
			$data['tentang'] = $this->Datamodel->tampilData('tentang_aplikasi')->result();
			$data['blog'] = $this->Datamodel->tampilData('blog')->result();

			$this->load->view('template/header', $data);
			$this->load->view('blog', $data);
			$this->load->view('template/footer', $data);
		}
		public function view($values){
			$where = array(
				'id' => $values
			);
			$where2 = array(
				'id_blog' => $values
			);
			$data['blog'] = $this->Datamodel->getWhere($where, 'blog')->result();
			$data['tentang'] = $this->Datamodel->tampilData('tentang_aplikasi')->result();
			$data['blog'] = $this->Datamodel->getWhere($where, 'blog')->result();
			$data['countblog'] = $this->Datamodel->getWhere($where2, 'komentar');

			$blog = $this->Datamodel->getWhere($where, 'blog')->result();
			foreach ($blog as $key => $value) {
				$datablog =	array(
					'view' => $value->view + 1
				);
				// code...
			}
			$this->Datamodel->updateData($where, $datablog, 'blog');
			// print_r($datablog);

			$this->load->view('template/header', $data);
			$this->load->view('viewblogs', $data);
			$this->load->view('template/footer', $data);
		}
		public function komentar(){
			$id = $this->input->post('id');
			$komentar = $this->input->post('komentar');
			$data =	array(
				'id_blog' => $id,
				'komentar' => $komentar
			);
			
			$this->Datamodel->tambahData($data,'komentar');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Komentar Ditambahkan !
							</div>');

			redirect('Blog/view/'.$id);
		}
		public function viewKomentar($values){
			$where = array(
				'id' => $values
			);
			$where2 = array(
				'id_blog' => $values
			);
			$data['blog'] = $this->Datamodel->getWhere($where, 'blog')->result();
			$data['tentang'] = $this->Datamodel->tampilData('tentang_aplikasi')->result();
			$data['blog'] = $this->Datamodel->getWhere($where, 'blog')->result();
			$data['komentar'] = $this->Datamodel->getWhere($where2, 'komentar')->result();

			$this->load->view('template/header', $data);
			$this->load->view('komentar', $data);
			$this->load->view('template/footer', $data);
		}
	}

?>