!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php/*<?php adalah awal mulai script php dimulai*/ 
/* Struktur = function functionName() {code to be executed;} */
function familyName($fname)/*fungsi dengan satu argumen ($ fname)*/ {//Pembukaan keriting brace ({) menunjukkan awal dari kode fungsi, dan penjepit keriting penutupan (}) menunjukkan akhir dari fungsi
    echo "$fname Refsnes.<br>";//echo adalah built-in printout menampilkan argumen fungsi $fname di ikuti string Refsnes lalu diberi pindah baris
}

familyName("Jani");//nama yang digunakan di dalam fungsi, yang output beberapa nama pertama yang berbeda, tapi nama belakang yang sama
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->