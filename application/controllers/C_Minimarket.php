<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Minimarket extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Template/V_Header');
		$this->load->view('Dashboard/V_index');
		$this->load->view('Template/V_Footer');
	}

	public function terimaDataMinimarket()
	{
		$database['nama_jualan'] = $this->input->post('nama_jualan');
		$database['kategori_jualan'] = $this->input->post('nama_jualan');
		$database['harga_jualan'] = $this->input->post('nama_jualan');

		$this->load->model('M_Minimarket');
		$this->M_Minimarket->simpanDataMinimarket();

		// $database['nama_jualan'] = $this->input->post('nama_jualana');s
	}
}
