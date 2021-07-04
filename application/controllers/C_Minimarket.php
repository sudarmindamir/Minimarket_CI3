<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Minimarket extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Minimarket');
	}
	public function index()
	{
		$this->load->view('Template/V_Header');
		$this->load->view('Dashboard/V_index');
		$this->load->view('Template/V_Footer');
	}

	public function terimaDataMinimarket()
	{
		$database['nama_jualan'] = $this->input->post('nama_jualan');
		$database['kategori_jualan'] = $this->input->post('kategori_jualan');
		$database['harga_jualan'] = $this->input->post('harga_jualan');

		$this->load->model('M_Minimarket');
		$this->M_Minimarket->simpanDataMinimarket($database);

		redirect(base_url('C_Minimarket/showDataMinimarket'));
		// $database['nama_jualan'] = $this->input->post('nama_jualana');s
	}

	public function showDataMinimarket()
	{
		$data['minimarket'] = $this->M_Minimarket->showDataMinimarket();

		// $this->load->model('M_Minimarket');
		// $this->M_Minimarket->showDataMinimarket($data);
		// $database['nama_jualan'] = $this->input->post('nama_jualana');

		$this->load->view('template/V_Header');
		$this->load->view('Show/V_Minimarket', $data);
		$this->load->view('template/V_Footer');
	}

	public function detailDataMinimarket()
	{
		$id_jualan = $this->uri->segment(3);
		$data['minimarket'] = $this->M_Minimarket->getDataMinimarketDetail($id_jualan);

		// $this->load->model('M_Minimarket');
		// $this->M_Minimarket->showDataMinimarket($data);
		// $database['nama_jualan'] = $this->input->post('nama_jualana');

		$this->load->view('template/V_Header');
		$this->load->view('Show/V_DetailMinimarket', $data);
		$this->load->view('template/V_Footer');
	}

	public function form_edit()
	{
		$id_jualan = $this->uri->segment(3);
		$data['minimarket'] = $this->M_Minimarket->getDataMinimarketDetail($id_jualan);

		$this->load->view('Template/V_Header', $data);
		$this->load->view('Show/Edit_barang');
		$this->load->view('Template/V_Footer');
	}

	public function updateDataMinimarket()
	{
		$id = $this->input->post('id_jualan');
		$database['nama_jualan'] = $this->input->post('nama_jualan');
		$database['kategori_jualan'] = $this->input->post('kategori_jualan');
		$database['harga_jualan'] = $this->input->post('harga_jualan');

		$this->M_Minimarket->updateMinimarket($database, $id);

		redirect(base_url('C_Minimarket/detailDataMinimarket') . '/' . $id);
	}
}
