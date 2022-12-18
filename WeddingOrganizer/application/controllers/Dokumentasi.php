<?php 

	class Dokumentasi extends CI_Controller
	{
		public function index()
		{
			$data['tentang'] = $this->Datamodel->tampilData('tentang_aplikasi')->result();
			$data['galeri'] = $this->Datamodel->tampilData('galeri')->result();

			$this->load->view('template/header', $data);
			$this->load->view('dokumentasi', $data);
			$this->load->view('template/footer', $data);
		}
	}

?>