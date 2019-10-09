!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php/*<?php adalah awal mulai script php dimulai*/
/*penulisan ;variabel di buka dengan $ lalu diikuti nama variabel dan ditutup dengan ;*/


function myTest() /*function adalah sebuah fungsi milik sendiri dengan nama my test*/ {
    $x = 5; // local scope, $x adalah variabel dengan value int ="5"
    echo "<p>Variable x inside function is: $x</p>";/*echo adalah built-in printout menampilkan hasil paragraf "variabel x outside function is: ditambahkan  variabel $x"*/
} 
myTest();// run function

//pemanggilan variabel $x di luar fungsi akan menyebabkan error karena bukan variabel global
echo "<p>Variable x outside function is: $x</p>";/*echo adalah built-in printout menampilkan hasil paragraf "variabel x outside function is: ditambahkan  variabel $x" tapi error*/
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->
