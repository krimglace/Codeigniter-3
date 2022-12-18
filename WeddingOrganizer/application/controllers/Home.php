<?php 

	class Home extends CI_Controller
	{
		public function index()
		{
			$data['tentang'] = $this->Datamodel->tampilData('tentang_aplikasi')->result();
			$data['banner'] = $this->Datamodel->tampilData('banner_slider')->result();
			$data['paket'] = $this->Datamodel->paket_where('paket')->result();
			$data['ketpaket'] = $this->Datamodel->paket_not_where('paket')->result();
			$data['promo'] = $this->Datamodel->tampilData('promo')->result();
			$data['galeri'] = $this->Datamodel->tampilData('galeri')->result();
			$data['faq'] = $this->Datamodel->tampilData('faq')->result();
			$data['blog'] = $this->Datamodel->getWithLimit('blog', 'created_at', 'DESC', 3)->result();

			$this->load->view('template/header', $data);
			$this->load->view('home', $data);
			$this->load->view('template/footer', $data);
		}
		public function kontak()
		{
			$data['tentang'] = $this->Datamodel->tampilData('tentang_aplikasi')->result();
			$data['banner'] = $this->Datamodel->tampilData('banner_slider')->result();
			$data['paket'] = $this->Datamodel->paket_where('paket')->result();
			$data['ketpaket'] = $this->Datamodel->paket_not_where('paket')->result();
			$data['promo'] = $this->Datamodel->tampilData('promo')->result();
			$data['galeri'] = $this->Datamodel->tampilData('galeri')->result();
			$data['faq'] = $this->Datamodel->tampilData('faq')->result();

			$this->load->view('template/header', $data);
			$this->load->view('kontak', $data);
		}
		public function pemesanan()
		{
			$nama = $this->input->post('nama');
			$hp = $this->input->post('hp');
			$pemesanan = $this->input->post('pemesanan');

			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://api.fonnte.com/send',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => array(
				'target' => '0895341237733',
				'message' => '
Pesanan Zuppa Soup Ginza
Konfirmasi untuk booked pada tanggal

'.date('F, d Y', strtotime($pemesanan)).'
==================== 
Catatan



====================
 

DATA PEMESAN 
Nama :'.$nama.',
No Hp : '.$hp.'
				', 
				'countryCode' => '62', //optional
			),
			  CURLOPT_HTTPHEADER => array(
			    'Authorization: 8r#KoRwoM46tPT4hLarS' //change TOKEN to your actual token
			  ),
			));

			$response = curl_exec($curl);
			// print_r($response);
			// curl_close($curl);
	
			$data =	array(
				'nama' => $nama,
				'nomor_handphone' => $hp,
				'rencana' => $pemesanan
			);
			$token = base64_encode($nama);
			
			$this->Datamodel->tambahData($data,'pemesanan');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Ditambahkan !
							</div>');

			redirect('Home/kontak');
		}
	}

?>