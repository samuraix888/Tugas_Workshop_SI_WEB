!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php//<?php adalah awal mulai script php dimulai

//Array adalah variabel khusus, yang dapat menyimpan lebih dari satu nilai pada suatu waktu.
$numbers = array(4, 6, 2, 22, 11);//array asosiatif adalah array yang menggunakan nama kunci yang Anda tetapkan untuk mereka.(array number)
sort($numbers);//array semacam agar descending

$arrlength = count($numbers);//The count()Fungsi digunakan untuk mengembalikan panjang (jumlah elemen) array
for($x = 0; $x < $arrlength; $x++) /*Untuk loop melalui dan mencetak semua nilai-nilai array diindeks, Anda bisa menggunakan for*/{
    echo $numbers[$x];// jalankan looping for
    echo "<br>";//jalankan pindah baris
}
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup h