!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php/*<?php adalah awal mulai script php dimulai*/ 
$t = date("H");//deklarasi variabel t dengan value hours( 24 jam)

if ($t < "20")/*jikalau value variabel t kurang dari 20 */ {
    /*maka*/ echo "Have a good day!";//echo adalah built-in printout menampilkan hasil  string 
}
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->
