<?php 

	/**
	 * 
	 */
	class AdminLogin extends CI_Controller
	{

		public function index()
		{
			$data['tentang'] = $this->Datamodel->tampilData('tentang_aplikasi')->result();

			$this->load->view('admin/login', $data);
		}
		public function proses_login()
		{
			$this->form_validation->set_rules('email','Email','required',[
				'required' => 'Email wajib diisi !'
			]);
			$this->form_validation->set_rules('password','Password','required',[
				'required' => 'Password wajib di isi !'
			]);

			if ($this->form_validation->run() == FALSE ) {
				$data['tentang'] = $this->Datamodel->tampilData('tentang_aplikasi')->result();

				$this->load->view('admin/login', $data);
			}else{
				$email = $this->input->post('email');
				$password = md5($this->input->post('password'));

				$cek = $this->Datamodel->cek_login($email, $password, 'admin');

				if ($cek->num_rows() > 0){

					foreach ($cek->result() as $ck){
						$sess_data['email'] = $ck->email;
						$id = $ck->id;
							$data_session = array(
								'id' => $id,
								'email_admin' => $email,
								'status' =>'login'
							);
							$this->session->set_userdata($data_session);	
					}
					redirect('Admin-Panel/Home');
				}else{
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger 					alert-dismissible fade show" role="alert">Email Atau Password Salah !
							</div>');
					redirect('AdminLogin');
				}
			}
		}
		public function logout()
		{
			$this->session->sess_destroy();
			echo "<script>
				alert('Data Anda Berhasil Logout');
				window.location.href = '".base_url('/')."';
			</script>";

		}
	}

?>