!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php//<?php adalah awal mulai script php dimulai
/* Struktur = function functionName() {code to be executed;} */
function familyName($fname, $year) /*fungsi dengan satu argumen ($ fname,$year)*/{//Pembukaan keriting brace ({) menunjukkan awal dari kode fungsi, dan penjepit keriting penutupan (}) menunjukkan akhir dari fungsi
    echo "$fname Refsnes. Born in $year <br>";//echo adalah built-in printout menampilkan argumen fungsi $fname di ikuti Refnes . born in argumen fungsi $year
}

familyName("Hege","1975");//nama yang digunakan di dalam fungsi, yang output beberapa nama pertama yang berbeda, tapi nama belakang yang sama lalu di ikuti year string (born in) dengan tahun belakang yang sama.
familyName("Stale","1978");
familyName("Kai Jim","1983");
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->