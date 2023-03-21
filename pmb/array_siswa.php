<?php
include_once('navbar.php');
include_once('sidebar.php');
?>
<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01101','uts'=>90,'uas'=>90,'tugas'=>80];
$ns3 = ['id'=>3,'nim'=>'01101','uts'=>85,'uas'=>85,'tugas'=>90];
$ar_nilai = [$ns1, $ns2, $ns3];
?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Week 1</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
<h3>Daftar Nilai Siswa</h3>
<!-- buat table -->
<table border="1" width="100%">
    <thead>
        <tr>
        <th>No</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>TUGAS</th>
        <th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($ar_nilai as $nilai){
echo '<tr><td>' .$nomor. '</td>';
echo '<td>' .$nilai['nim']. '</td>';
echo '<td>' .$nilai['uts']. '</td>';
echo '<td>' .$nilai['uas']. '</td>';
echo '<td>' .$nilai['tugas']. '</td>';
$nilai_akhir = ($nilai['uts'] + $nilai['uas'] + $nilai['tugas'])/3;
echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
echo '<tr/>';
$nomor++;
        }
        ?>
    </tbody>
</table>
    </div>
<?php
include_once('footer.php');
?>