!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php/*<?php adalah awal mulai script php dimulai*/ 
$x = 1;//deklarasi variabel x dengan value int
/*do while, Loop yang akan selalu mengeksekusi blok kode sekali, maka ia akan memeriksa kondisi, dan ulangi loop sementara kondisi yang ditentukan benar.*/
do {
    echo "The number is: $x <br>";//echo adalah built-in printout menampilkan hasil string + $x dilanjutkan pindah baris  
    $x++;//perulangan
} while ($x <= 5);
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->