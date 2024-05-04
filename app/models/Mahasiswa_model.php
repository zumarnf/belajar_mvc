<?php

class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         "nama" => "Kazo",
    //         "nimp" => "1223333",
    //         "email" => "kazo@gmail.com",
    //         "jurusan" => "Informatika"
    //     ],
    //     [
    //         "nama" => "Mizu",
    //         "nimp" => "1623523",
    //         "email" => "mizu@gmail.com",
    //         "jurusan" => "Informatika"
    //     ],
    //     [
    //         "nama" => "Lumi",
    //         "nimp" => "1888523",
    //         "email" => "lumi@gmail.com",
    //         "jurusan" => "Sistem Informasi"
    //     ]
    // ];

    private $table = 'mahasiswa';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }



    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id =:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa VALUES ('', :nama, :nimp, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nimp', $data['nimp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();

    }
}
