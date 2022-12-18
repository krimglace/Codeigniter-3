<?php 

	class Faqs extends CI_Controller
	{
		public function index()
		{
			$data['tentang'] = $this->Datamodel->tampilData('tentang_aplikasi')->result();
			$data['faq'] = $this->Datamodel->tampilData('faq')->result();

			$this->load->view('template/header', $data);
			$this->load->view('faqs', $data);
			$this->load->view('template/footer', $data);
		}
	}

?>