!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php//<?php adalah awal mulai script php dimulai

//Array adalah variabel khusus, yang dapat menyimpan lebih dari satu nilai pada suatu waktu.
$cars = array("Volvo", "BMW", "Toyota");//array asosiatif adalah array yang menggunakan nama kunci yang Anda tetapkan untuk mereka.
rsort($cars);//array semacam agar descending

$clength = count($cars);//The count()Fungsi digunakan untuk mengembalikan panjang (jumlah elemen) array
for($x = 0; $x < $clength; $x++) /*Untuk loop melalui dan mencetak semua nilai-nilai array diindeks, Anda bisa menggunakan for*/{
    echo $cars[$x];// jalankan looping for
    echo "<br>";//jalankan pindah baris
}
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup h