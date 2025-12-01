<?php

class User_model {
    // nama tabel di database
    private $table = 'users';
    private $db;

    public function __construct() {
        // pas class dipanggil, langsung instansiasi database wrapper
        $this->db = new Database;
    }

    // fungsi buat ambil semua data user
    public function getAllUsers() {
        // query select semua data dari tabel users
        $this->db->query('SELECT * FROM ' . $this->table);
        // balikin hasilnya dalam bentuk banyak data (array of assoc)
        return $this->db->resultSet();
    }

    // fungsi ambil data user berdasarkan id (detail)
    public function getUserById($id) {
        // query select pake where id
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        // bind parameter id biar aman
        $this->db->bind('id', $id);
        // balikin satu baris data aja
        return $this->db->single();
    }

    // fungsi tambah data user baru
    public function tambahDataUser($data) {
        $query = "INSERT INTO users (name, email) VALUES (:name, :email)";
        
        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // fungsi hapus data user
    public function hapusDataUser($id) {
        $query = "DELETE FROM users WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // fungsi ubah data user
    public function ubahDataUser($data) {
        $query = "UPDATE users SET name = :name, email = :email WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}