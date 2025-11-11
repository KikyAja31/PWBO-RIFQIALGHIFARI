<?php
class PeminjamanBuku_model {
    private $table = 'peminjaman_2411500032';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPeminjamanBuku()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPeminjamanBukuById($kd)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE Kd_pinjam032 = :kd');
        $this->db->bind('kd', $kd);
        return $this->db->single();
    }

    public function tambahDataPeminjamanBuku($data)
    {
        $query = "INSERT INTO {$this->table} (Kd_pinjam032, NimMhs032, TglPinjam032, JmlPinjam032, JudulBuku032, TglKembali032)
                  VALUES (:Kd_pinjam032, :NimMhs032, :TglPinjam032, :JmlPinjam032, :JudulBuku032, :TglKembali032)";
        $this->db->query($query);
        $this->db->bind('Kd_pinjam032', $data['Kd_pinjam032'] ?? null);
        $this->db->bind('NimMhs032', $data['NimMhs032'] ?? null);
        $this->db->bind('TglPinjam032', $data['TglPinjam032'] ?? null);
        $this->db->bind('JmlPinjam032', $data['JmlPinjam032'] ?? null);
        $this->db->bind('JudulBuku032', $data['JudulBuku032'] ?? null);
        $this->db->bind('TglKembali032', $data['TglKembali032'] ?? null);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataPeminjamanBuku($kd)
    {
        $query = "DELETE FROM {$this->table} WHERE Kd_pinjam032 = :kd";
        $this->db->query($query);
        $this->db->bind('kd', $kd);
        $this->db->execute();
        return $this->db->rowCount();
    }
}