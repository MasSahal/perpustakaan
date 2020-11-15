<?php

namespace App\Controllers;

use CodeIgniter\Session\Session;

class Home extends BaseController
{
	public $bukuModel;
	private $session;

	public function __construct()
	{
		$this->bukuModel = new \App\Models\Buku();
		$this->session = \Config\Services::session();
	}

	public function index()
	{
		return view('dashboard');
	}

	public function buku()
	{
		$data['list_buku'] = $this->bukuModel->findAll();
		return view('buku', $data);
	}

	public function tambah_buku()
	{
		return view('tambah_buku');
	}

	public function input_buku()
	{
		$judul = $this->request->getPost('judul');
		$pengarang = $this->request->getPost('pengarang');
		$penerbit = $this->request->getPost('penerbit');
		$tahun_terbit = $this->request->getPost('tahun_terbit');
		$sinopsis = $this->request->getPost('sinopsis');

		$data = ([
			'judul' => $judul,
			'penerbit' => $penerbit,
			'pengarang' => $pengarang,
			'tahun_terbit' => $tahun_terbit,
			'sinopsis' => $sinopsis
		]);

		$tambah = $this->bukuModel->insert($data);
		if ($tambah) {
			$this->session->setFlashdata('msg', 'Berhasil Tambah Buku !');
			return redirect()->to(base_url('/buku'));
		} else {
			$this->sessison->setFlashdata('msg', 'Gagal Tambah Buku !');
			return redirect()->to(base_url('/buku'));
		}
	}

	public function hapus_buku($id)
	{
		$hapus = $this->bukuModel->delete($id);
		if ($hapus) {
			$this->session->setFlashdata('msg', 'Berhasil Hapus Buku !');
			return redirect()->to(base_url('/buku'));
		} else {
			$this->sessison->setFlashdata('msg', 'Gagal Hapus Buku !');
			return redirect()->to(base_url('/buku'));
		}
	}

	public function edit_buku($id)
	{
		$data['buku'] = $this->bukuModel->find($id);
		return view('edit_buku', $data);
	}

	public function simpan_edit_buku()
	{
		$id = $this->request->getPost('id');
		$judul = $this->request->getPost('judul');
		$pengarang = $this->request->getPost('pengarang');
		$penerbit = $this->request->getPost('penerbit');
		$tahun_terbit = $this->request->getPost('tahun_terbit');
		$sinopsis = $this->request->getPost('sinopsis');

		$data = ([
			'judul' => $judul,
			'penerbit' => $penerbit,
			'pengarang' => $pengarang,
			'tahun_terbit' => $tahun_terbit,
			'sinopsis' => $sinopsis
		]);

		$tambah = $this->bukuModel->update($id, $data);
		if ($tambah) {
			$this->session->setFlashdata('msg', 'Berhasil Edit Buku !');
			return redirect()->to(base_url('/buku'));
		} else {
			$this->sessison->setFlashdata('msg', 'Gagal Edit Buku !');
			return redirect()->to(base_url('/buku'));
		}
	}

	public function about()
	{
		return view('about');
	}
	//--------------------------------------------------------------------

}
