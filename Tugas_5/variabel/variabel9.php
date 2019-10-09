!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php/*<?php adalah awal mulai script php dimulai*/
/*penulisan ;variabel di buka dengan $ lalu diikuti nama variabel dan ditutup dengan ;*/
function myTest() /*function adalah sebuah fungsi milik sendiri dengan nama my test*/{
    static $x = 0;//variabel lokal tidak akan dihapus dan di set dari 0
    echo $x;/*echo adalah built-in printout menampilkan variabel $x */
    $x++;// perulangan
}

myTest();// run function
echo "<br>";/*echo adalah built-in printout disertai pemindahan baris*/
myTest();// run function
echo "<br>";/*echo adalah built-in printout disertai pemindahan baris*/
myTest();// run function
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->
