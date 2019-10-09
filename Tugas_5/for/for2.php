!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php/*<?php adalah awal mulai script php dimulai*/ 
/*foreach ($array as $value) {
    code to be executed;
} */
$colors = array("red", "green", "blue", "yellow"); //deklarasi variabel x dengan value array

foreach/*oop bekerja hanya pada array*/ ($colors as $value) {
  echo "$value <br>";//echo adalah built-in printout menampilkan hasil $value
}
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->