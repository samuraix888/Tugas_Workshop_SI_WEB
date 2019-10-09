<!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php/* <?php adalah awal mulai script php dimulai*/

/*Dalam PHP, NO kata kunci (misalnya if, else, while, echo, dll), kelas, fungsi, dan fungsi user-defined adalah case-sensitive.
				Namun semua nama variabel adalah case-sensitive!*/

$color = "red";/*color adalah deklarasi variabel*/

echo "My car is " . $color . "<br>";/*echo adalah built-in printout dari php, $color akan dieksekusi pertama di output php nanti*/
echo "My house is " . $COLOR . "<br>";/*echo adalah built-in printout dari php, $COLOR tidak akan dieksekusi karena adalah variabel berbeda*/
echo "My boat is " . $coLOR . "<br>";/*echo adalah built-in printout dari php, $COLOR tidak akan dieksekusi karena adalah variabel berbeda*/

/* pernyataan PHP diakhiri dengan titik koma ( ;).*/
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->