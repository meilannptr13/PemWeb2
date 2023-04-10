<?php
class produk{
    private $koneksi;

    public function __construct(){
        global $dbh; //panggil instance object di koneksi.php
        $this->koneksi = $dbh;
    }

    public function dataProduk(){
        $sql = "SELECT c.*, j.nama AS prod
        FROM produk c
        INNER JOIN jenis_produk j ON j.id  = c.jenis_produk_id
        ORDER BY c.id DESC";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getProduk($id){
        $sql = "SELECT c.*, j.nama AS prod
        FROM produk c
        INNER JOIN jenis_produk j ON j.id  = c.jenis_produk_id
        WHERE c.id = ?";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function simpan($data){
        $sql = "INSERT INTO produk (kode,nama,harga_beli,harga_jual,stok,min_stok,jenis_produk_id) VALUES (?,?,?,?,?,?,?)";
        $pss= $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function ubah($data){
        $sql ="UPDATE produk SET kode=?,nama=?,harga_beli=?,harga_jual=?,stok=?,min_stok=?,jenis_produk_id=? WHERE id=?";
        $pss= $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function hapus($id){
        $sql = "DELETE FROM produk WHERE id=?";
        $pss= $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
?>