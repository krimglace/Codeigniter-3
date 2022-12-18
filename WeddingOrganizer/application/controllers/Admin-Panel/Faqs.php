<?php 

	/**
	 * 
	 */
	class Faqs extends CI_Controller
	{

		public function index()
		{
			if($this->session->userdata('status')=="login"){

				$data['tentang'] = $this->Datamodel->tampilData('tentang_aplikasi')->result();
				$data['faq'] = $this->Datamodel->tampilData('faq')->result();

				$this->load->view('admin/sidebar', $data);
				$this->load->view('admin/faqs', $data);
				$this->load->view('admin/footer', $data);

			} else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Harus Login !
							</div>');
					redirect('AdminLogin');
			}
		}
		public function tambah()
		{
			$pertanyaan = $this->input->post('pertanyaan');
			$jawaban = $this->input->post('jawaban');
	
			$data =	array(
				'pertanyaan' => $pertanyaan,
				'jawaban' => $jawaban
			);
			
			$this->Datamodel->tambahData($data,'faq');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Ditambahkan !
							</div>');

			redirect('Admin-Panel/Faqs');
		}

		public function update()
		{
			$pertanyaan = $this->input->post('pertanyaan');
			$jawaban = $this->input->post('jawaban');
			$id = $this->input->post('id');
	
			$data =	array(
				'pertanyaan' => $pertanyaan,
				'jawaban' => $jawaban
			);
			$where = array(
				'id' => $id
			);
			
			$this->Datamodel->updateData($where, $data,'faq');

			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Diupdate !
							</div>');
			redirect('Admin-Panel/Faqs');
		}
		public function delete($values)
		{
			$where = array(
				'id' => $values
			);
			
			$this->Datamodel->deleteData($where,'faq');
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Berhasil Dihapus !
							</div>');
			redirect('Admin-Panel/Faqs');
		}

	}

?>