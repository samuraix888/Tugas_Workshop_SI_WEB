!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php/*<?php adalah awal mulai script php dimulai*/ 
// Cast float to int 
$x = 23465.768;// deklarasi variabel $x dengan value float
$int_cast = (int)$x;//$int_cast = (int)digunakan untuk mengkonversi nilai ke integer.
echo $int_cast;//echo adalah built-in printout menampilkan hasil $int_cast
  
echo "<br>";//echo adalah built-in printout menampilkan hasil pindah baris

// Cast string to int
$x = "23465.768";// deklarasi variabel $x dengan value string
$int_cast = (int)$x;//$int_cast = (int)digunakan untuk mengkonversi nilai ke integer.
echo $int_cast;//echo adalah built-in printout menampilkan hasil $int_cast
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->

