!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php/*<?php adalah awal mulai script php dimulai*/ 

// Check if the variable is numeric   
$x = 5985;// deklarasi variabel $x dengan value int
var_dump(is_numeric($x));//PHP var_dump mengembalikan fungsi tipe data dan nilai (prioritas mebhadi numeric if true)

echo "<br>";//echo adalah built-in printout menampilkan hasil variabel diatas, dilanjutkan pindah baris

$x = "5985";// deklarasi variabel $x dengan value int
var_dump(is_numeric($x));//PHP var_dump mengembalikan fungsi tipe data dan nilai (prioritas mebhadi numeric if true)

echo "<br>";//echo adalah built-in printout menampilkan hasil variabel diatas, dilanjutkan pindah baris

$x = "59.85" + 100;// deklarasi variabel $x dengan value int
var_dump(is_numeric($x));//PHP var_dump mengembalikan fungsi tipe data dan nilai (prioritas mebhadi numeric if true)

echo "<br>";//echo adalah built-in printout menampilkan hasil variabel diatas, dilanjutkan pindah baris

$x = "Hello";// deklarasi variabel $x dengan value string
var_dump(is_numeric($x));//PHP var_dump mengembalikan fungsi tipe data dan nilai (prioritas mebhadi numeric if true)
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->

