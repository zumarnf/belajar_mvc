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
    private $dbh; //database handle
    private $stmt; //statement

    public function __construct()
    {
        //database name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());

        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}