<?php
class Jenis_produk{
    private $koneksi;

    public function __construct(){
        global $dbh; 
        $this->koneksi = $dbh;
    }
    public function dataJenisproduk(){
        $sql = "SELECT * FROM jenis_produk";

        // prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
?>