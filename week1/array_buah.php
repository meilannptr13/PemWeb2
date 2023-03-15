<?php
$ar_buah = ["Pepaya","Mangga","Pisang","Jambu"];

echo "ini adalah hasil data dalam array";
// cetak buah ke index ke 2
echo "</br>ini buah index ke 2 = $ar_buah[2]";

// cetak total buah
echo '</br>total buah adalah' .count($ar_buah);

// cetak seluruh data array buah
echo "<ol>";
foreach ($ar_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// tambahkan buah
$ar_buah[] = "Durian";

// hapus buah
unset($ar_buah[1]);

// ubah buah index ke dua menjadi manggis
$ar_buah[2] = "Manggis";

// cetak seluruh buah dengan index nya
echo "<ol>";
foreach ($ar_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

?>