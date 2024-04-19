<?php

class About
{
    public function index($nama = 'Theo', $pekerjaan = 'Google')
    {
        echo "Nama saya $nama, saya kerja di $pekerjaan ";
    }
    public function page()
    {
        echo 'About/page';
    }
}