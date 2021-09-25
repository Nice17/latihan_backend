<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_model');
	}

	public function index()
	{
		$d['data'] = $this->m_model->tampil();
		$this->load->view('lending', $d);
	}

	public function tambah()
	{
		$nama = $this->input->post('nama');
		$level = $this->input->post('level');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$username = $this->input->post('username');
		$tem_lahir = $this->input->post('tem_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');

		$data = array(
			'nama' => $nama,
			'level' => $level,
			'email' => $email,
			'alamat' => $alamat,
			'username' => $username,
			'username' => $username,
			'tgl_lahir' => $tgl_lahir,
			'tem_lahir' => $tem_lahir,
		);

		$this->m_model->tambah($data);
		redirect(base_url());
	}

	public function update($id_user)
	{

		$nama = 'updated';
		$level = 'updated';
		$email = 'updated';
		$alamat = 'updated';
		$username = 'updated';
		$tem_lahir = 'updated';
		$tgl_lahir = 'updated';

		$data = array(
			'nama' => $nama,
			'level' => $level,
			'email' => $email,
			'alamat' => $alamat,
			'username' => $username,
			'username' => $username,
			'tgl_lahir' => $tgl_lahir,
			'tem_lahir' => $tem_lahir,
		);


		$this->m_model->update($id_user, $data);
		redirect(base_url());
	}

	public function hapus($id_user)
	{
		$this->m_model->hapus($id_user);
		redirect(base_url());
	}
}
