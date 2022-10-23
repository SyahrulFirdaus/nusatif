<!-- Create By Syahrul Firdaus -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['daftar_harga'] = $this->db->get('daftar_harga')->result();
		$data['user'] = $this->m_data->tampil_data()->result();
		$data['Judul'] 	= 'Nutech-Integrasi';
		$this->load->view('template/beranda_header', $data);
		$this->load->view('index', $data);
		$this->load->view('template/beranda_footer');
	}

	public function input_data()
	{

		$data['Judul'] 	= 'Nutech-Integrasi';
		$this->load->view('template/beranda_header', $data);
		$this->load->view('input_barang');
		$this->load->view('template/beranda_footer');
	}

	function tambah_aksi()
	{

		$nama_barang = $this->input->post('nama_barang');
		$harga_jual = $this->input->post('harga_jual');
		$harga_beli = $this->input->post('harga_beli');
		$stok = $this->input->post('stok');
		$foto_barang = $_FILES['foto_barang'];

		if ($foto_barang = '') {
		} else {
			$config['upload_path']      = './assets/foto';
			$config['allowed_types']    = 'jpg|png|gif|jpeg';
			$config['max_size']             = 100; // 100Kb

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('foto_barang')) {
				$foto_barang = $this->upload->data('file_name');
			}
		}

		$data = array(
			'nama_barang' => $nama_barang,
			'harga_jual' => $harga_jual,
			'harga_beli' => $harga_beli,
			'stok' => $stok,
			'foto_barang' => $foto_barang
		);

		$this->m_data->input_data($data, 'daftar_harga');
		$this->session->set_flashdata('message', '<div class="alert-success" role="alert">Berhasil menambahkan data</div>');
		redirect('welcome');
	}

	public function del($id)
	{
		$this->m_data->del($id);
		$this->session->set_flashdata('message', '<div class="alert-success" role="alert">Anda berhasil menghapus daftar harga tersebut</div>');
		redirect('welcome');
	}

	function edit($id_barang)
	{
		$data['judul'] = 'Edit Data';
		$where = array('id_barang' => $id_barang);
		$data['user'] = $this->m_data->edit_data($where, 'daftar_harga')->result();
		$this->load->view('template/beranda_header', $data);
		$this->load->view('view_edit', $data);
		$this->load->view('template/beranda_footer');
	}

	function update()
	{

		$nama_barang = $this->input->post('nama_barang');
		$harga_jual = $this->input->post('harga_jual');
		$harga_beli = $this->input->post('harga_beli');
		$stok = $this->input->post('stok');
		$foto_barang = $_FILES['foto_barang'];

		if ($foto_barang = '') {
		} else {
			$config['upload_path']      = './assets/foto';
			$config['allowed_types']    = 'jpg|png|gif|jpeg';

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('foto_barang')) {
				$foto_barang = $this->upload->data('file_name');
			}
		}

		$data = array(
			'nama_barang' => $nama_barang,
			'harga_jual' => $harga_jual,
			'harga_beli' => $harga_beli,
			'stok' => $stok,
			'foto_barang' => $foto_barang
		);

		$where = array(
			'nama_barang' => $nama_barang
		);

		$this->m_data->update_data($where, $data, 'daftar_harga');
		redirect('welcome');
	}
}
