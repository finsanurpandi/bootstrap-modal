<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_penduduk');
		$this->load->library('upload');
	}

	function index()
	{
		$data['penduduk'] = $this->m_penduduk->select();
		$data['total'] = $this->m_penduduk->count_row();

		$this->load->view('penduduk/header');
		$this->load->view('penduduk/penduduk', $data);
		$this->load->view('penduduk/modal');
		$this->load->view('penduduk/footer');
	}

	function configImage()
	{
		
		$nmfile = "img_".time();
		$config['upload_path']   =   "./assets/uploads/";
		$config['allowed_types'] =   "gif|jpg|jpeg|png"; 
		$config['max_size']      =   "3000";
		$config['max_width']     =   "1907";
		$config['max_height']    =   "1280";
		$config['file_name']     =   $nmfile;
 
		$this->upload->initialize($config);
	}

	function insertPenduduk()
	{
		$this->configImage();

		$data = array (
					'nik' => $this->input->post('nik'),
					'nama' => $this->input->post('nama'),
					'tempat_lahir' => $this->input->post('tempatLahir'),
					'tanggal_lahir' => $this->input->post('tanggalLahir'),
					'jenis_kelamin' => $this->input->post('jenisKelamin'),
					'alamat' => $this->input->post('alamat')
				);

		if (!$this->upload->do_upload('gambar')) {
			$fileinfo = $this->upload->data();

			$data['path_img'] = "default.jpg";
		} else {
			$fileinfo = $this->upload->data();

			$data['path_img'] = $fileinfo['file_name'];
		}

		$this->m_penduduk->insert($data);
		redirect('penduduk', 'refresh');
	}

	function editPenduduk()
	{
		$id = $this->input->post('id');
		$img_path = $this->input->post('path');

		$this->configImage();

		$data = array (
				'nik' => $this->input->post('nik'),
				'nama' => $this->input->post('nama'),
				'tempat_lahir' => $this->input->post('tempatLahir'),
				'tanggal_lahir' => $this->input->post('tanggalLahir'),
				'jenis_kelamin' => $this->input->post('jenisKelamin'),
				'alamat' => $this->input->post('alamat')
			);

		if ($this->upload->do_upload('gambar')) {
			$fileinfo = $this->upload->data();

			$data['path_img'] = $fileinfo['file_name'];

			if ($img_path != "default.jpg") {
				unlink("./assets/uploads/".$img_path);
			}
		}

		$this->m_penduduk->update($data, $id);
		redirect('penduduk', 'refresh');
	}

	function hapusPenduduk()
	{
		$id = $this->input->post('id');
		$img_path = $this->input->post('path');

		$this->m_penduduk->delete($id);
		unlink("./assets/uploads/".$img_path);

		redirect('penduduk', 'refresh');
	}

}