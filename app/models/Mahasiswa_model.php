<?php

class Mahasiswa_model {
    private $table = 'tbl_mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    
    public function getAllMahasiswa()
    {
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
    }

    public function getDetailMahasiswa($id) 
    {
        $this->db->query('SELECT * FROM ' . $this->table  . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMhs($data)
    {
        $this->db->query("INSERT INTO tbl_mahasiswa VALUES ('', :nama, :nrp, :email, :jurusan)");
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataMhs($id) 
    {
        $this->db->query("DELETE FROM tbl_mahasiswa WHERE id =:id");
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }


}