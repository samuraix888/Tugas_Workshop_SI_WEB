<?php declare(strict_types=1);// strict requirement, Untuk menentukan strictkita perlu mengatur declare(strict_types=1);. Ini harus berada di baris pertama dari file PHP. Mendeklarasikan menspesifikasikan ketat yang berfungsi panggilan yang dibuat dalam file yang harus secara ketat mematuhi tipe data tertentu ?>
!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php//<?php adalah awal mulai script php dimulai
/* Struktur = function functionName() {code to be executed;} */
function sum(int $x, int $y) /*fungsi dengan satu argumen (integer $x, integer $y)*/{
    $z = $x + $y;//function perhitungan
    return $z;//statement immediately terminates the execution of a function when it is called from within that function.
}

echo "5 + 10 = " . sum(5,10) . "<br>";//jalankan fungsi 5 + 10 = 15
echo "7 + 13 = " . sum(7,13) . "<br>";//jalankan fungsi 7 + 13 = 20
echo "2 + 4 = " . sum(2,4);//jalankan fungsi 2 + 4 = 6 
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->