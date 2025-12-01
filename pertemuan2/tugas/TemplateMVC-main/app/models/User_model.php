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
}