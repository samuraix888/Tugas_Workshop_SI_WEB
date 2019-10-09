!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php/*<?php adalah awal mulai script php dimulai*/
/*penulisan ;variabel di buka dengan $ lalu diikuti nama variabel dan ditutup dengan ;*/

/*deklarasi variabel global scope bisa diakses oleh mereka yang ada diluar function, jadi yang berada di dalem function tidak dapat mengaksesnya */
$x = 5; // global scope, $x adalah variabel dengan value int ="5"
 
function myTest()/*function adalah sebuah fungsi milik sendiri dengan nama my test*/ {
    //pemanggilan variabel $x di dalam fungsi akan menyebabkan error karena bukan variabel local 
    echo "<p>Variable x inside function is: $x</p>";/*echo adalah built-in printout menampilkan hasil paragraf "variabel x outside function is: ditambahkan  variabel $x" tp error*/
} 
myTest();// run function
	//pemanggilan variabel $x tidak akan eroor karena bersifat global scope
echo "<p>Variable x outside function is: $x</p>";/*echo adalah built-in printout menampilkan hasil paragraf "variabel x outside function is: ditambahkan  variabel $x"*/
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->