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
		$this->layout();
	}
}