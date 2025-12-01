<?php

class User extends Controller 
{
    public function index()
    {
        $data["judul"] = "Daftar User";
        $data['users'] = $this->model('User_model')->getAllUsers();
        $this->view('list', $data);
    }

    public function detail($id)
    {
        $data["judul"] = "Detail User";
        $data['user'] = $this->model('User_model')->getUserById($id);
        $this->view('detail', $data); 
    }

    public function tambah()
    {
        $data["judul"] = "Tambah Data User";
        $this->view('tambah', $data);
    }

    public function prosesTambah()
    {
        if ($this->model('User_model')->tambahDataUser($_POST) > 0) {
            header('Location: ' . BASE_URL . '/user');
            exit;
        } else {
            header('Location: ' . BASE_URL . '/user');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('User_model')->hapusDataUser($id) > 0) {
            header('Location: ' . BASE_URL . '/user');
            exit;
        } else {
            header('Location: ' . BASE_URL . '/user');
            exit;
        }
    }

    public function ubah($id)
    {
        $data["judul"] = "Ubah Data User";
        $data['user'] = $this->model('User_model')->getUserById($id);
        $this->view('ubah', $data);
    }

    public function prosesUbah()
    {
        if ($this->model('User_model')->ubahDataUser($_POST) > 0) {
            header('Location: ' . BASE_URL . '/user');
            exit;
        } else {
            header('Location: ' . BASE_URL . '/user');
            exit;
        }
    }
}