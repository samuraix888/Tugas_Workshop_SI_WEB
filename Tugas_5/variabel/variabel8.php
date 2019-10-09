!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php/*<?php adalah awal mulai script php dimulai*/
/*penulisan ;variabel di buka dengan $ lalu diikuti nama variabel dan ditutup dengan ;*/
$x = 5;// global scope, $x adalah variabel dengan value int ="5"
$y = 10;// global scope, $y adalah variabel dengan value int ="10"

function myTest() /*function adalah sebuah fungsi milik sendiri dengan nama my test*/ {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];/*akses $Global emnggunakan case sensu=itive juga tidak berpengaruh, lalu [] adalah memanggil value variabel */
} 

myTest();  // run function
echo $y; // output the new value for variable $yadalah 15
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->