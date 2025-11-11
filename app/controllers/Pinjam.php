<?php
class Pinjam extends Controller {
    public function index()
    {
        $data['judul'] = 'Data Peminjaman Buku';
        $data['pinjam'] = $this->model('PeminjamanBuku_model')->getAllPeminjamanBuku();
        $this->view('templates/header', $data);
        $this->view('pinjam/index', $data);
        $this->view('templates/footer');
    }

    public function detail($kd)
    {
        $data['judul'] = 'Detail Peminjaman Buku';
        $data['pinjam'] = $this->model('PeminjamanBuku_model')->getPeminjamanBukuById($kd);
        $this->view('templates/header', $data);
        $this->view('pinjam/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('PeminjamanBuku_model')->tambahDataPeminjamanBuku($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/pinjam');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/pinjam');
            exit;
        }
    }

    public function hapus($kd)
    {
        if ($this->model('PeminjamanBuku_model')->hapusDataPeminjamanBuku($kd) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/pinjam');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/pinjam');
            exit;
        }
    }

    public function getUbah()
    {
        if (!isset($_POST['kd'])) {
            echo json_encode(['error' => 'KD tidak dikirim']);
            return;
        }
        $res = $this->model('PeminjamanBuku_model')->getPeminjamanBukuById($_POST['kd']);
        if ($res) {
            echo json_encode($res);
        } else {
            echo json_encode(['error' => 'Data tidak ditemukan']);
        }
    }
}