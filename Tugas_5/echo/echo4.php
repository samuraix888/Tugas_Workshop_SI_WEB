!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php/*<?php adalah awal mulai script php dimulai*/
$txt1 = "Learn PHP";// deklarasi variabel $txt1 dengan value string
$txt2 = "W3Schools.com";// deklarasi variabel $txt2 dengan value string
$x = 5;// deklarasi variabel $x dengan value int
$y = 4;// deklarasi variabel $y dengan value int

print "<h2>" . $txt1 . "</h2>";/*print adalah built-in printout menampilkan variabel string $txt1 dengan ukuran font h2*/
print "Study PHP at " . $txt2 . "<br>";/*print adalah built-in printout menampilkan variabel string $txt2 dengan ukuran font h2*/
print $x + $y;/*print adalah built-in printout menampilkan hasil perhitungan int variabel x + y*/
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->

