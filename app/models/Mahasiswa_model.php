<?php
class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function getAllMahasiswa(){
        return $this->nama;
    }
}