<?php

class About {
    public function index($nama = 'Satria', $pekerjaan = 'Mahasiswa')
    {
        echo "Hallo nama saya $nama, saya seorang $pekerjaan";
    }

    public function page(){
        echo 'About/Page';
    }
}