<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
		$this->load->helper('url');
		$this->load->helper('download');
	}

	public function index()
	{
		$this->data['website'] = $this->db->get('tbl_website')->row();
		$this->data['homeweb'] = $this->db->get('tbl_homeweb')->row();
		$this->data['fitur'] = $this->db->get('tbl_fitur')->result();
		$this->data['gallery'] = $this->db->get('tbl_gallery')->result();
		$this->data['menu_populer'] = $this->db->get('tbl_menu_populer')->result();
		$this->data['menu_slide'] = $this->db->get('tbl_menu')->result();
		$this->data['testi'] = $this->db->get('tbl_testimoni')->result();
		$this->data['sosmed'] = $this->db->get('tbl_sosmed')->result();

		$this->web = 'content/v_home';
		// $this->data['navigation']=$this->db->get_where('tbl_navigation');
		$this->layout();
	}
	public function formPost()

	{

		$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));



		$userIp = $this->input->ip_address();



		$secret = $this->config->item('google_secret');



		$url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $recaptchaResponse . "&remoteip=" . $userIp;



		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$output = curl_exec($ch);

		curl_close($ch);



		$status = json_decode($output, true);



		if ($status['success']) {

			print_r('Google Recaptcha Successful');

			exit;
		} else {

			$this->session->set_flashdata('flashError', 'Sorry Google Recaptcha Unsuccessful!!');
		}



		redirect('form', 'refresh');
	}



	public function add_user()
	{
		$nama = $this->input->post('nama');
		$telp = $this->input->post('telp');
		$namaLogistics = $this->input->post('namaLogistics');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$domisili = $this->input->post('domisili');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'nama' => $nama,
			'noTelp' => $telp,
			'namaLogistics' => $namaLogistics,
			'alamat' => $alamat,
			'email' => $email,
			'domisili' => $domisili,
			'keterangan' => $keterangan
		);
		$this->M_data->input_data($data, 'log_user');
		// echo "<script>alert('Success');</script>";
		redirect('../thank_you', 'refresh');
	}

	public function download()
	{
		force_download('upload/Promo-List-EMCO.pdf', NULL);
	}
}