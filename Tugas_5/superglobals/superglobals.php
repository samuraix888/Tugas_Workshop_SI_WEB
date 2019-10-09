!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php//<?php adalah awal mulai script php dimulai
$x = 75;//deklarasi variabel x int
$y = 25; //deklarasi variabel y int

function addition() /*membuat fungsi*/{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];//membuat deklarasi perhitungan di dalam dungsi
}

addition();//addition operator tambah
echo $z;//menjalankan dungsi
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup h