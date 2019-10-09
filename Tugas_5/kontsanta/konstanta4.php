!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php/*<?php adalah awal mulai script php dimulai*/ 
define("GREETING", "Welcome to W3Schools.com!");//membuat konstanta dengan define(name, value, case-insensitive)

function myTest()//sebuah fungsi bernama mytest {
    echo GREETING;//echo adalah built-in printout menampilkan hasil konstanta greeting
}
 
myTest();//menjalankan function my test
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->
