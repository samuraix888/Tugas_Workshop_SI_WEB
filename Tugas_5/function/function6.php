<?php declare(strict_types=1);// strict requirement, Untuk menentukan strictkita perlu mengatur declare(strict_types=1);. Ini harus berada di baris pertama dari file PHP. Mendeklarasikan menspesifikasikan ketat yang berfungsi panggilan yang dibuat dalam file yang harus secara ketat mematuhi tipe data tertentu ?>
!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php//<?php adalah awal mulai script php dimulai
/* Struktur = function functionName() {code to be executed;} */
function setHeight(int $minheight = 50) /*fungsi dengan satu argumen (int $minheight = 50) maksdnya adalah tinggi minimal 50 */{//Pembukaan keriting brace ({) menunjukkan awal dari kode fungsi, dan penjepit keriting penutupan (}) menunjukkan akhir dari fungsi
    echo "The height is : $minheight <br>";//echo adalah built-in printout menampilkan argumen fungsi $fname di ikuti Refnes . born in argumen fungsi $year
}

setHeight(350);//output dengan set value yang ditetapkan
setHeight();//output function yang telah di set
setHeight(135);//output dengan set value yang ditetapkan
setHeight(80);//output dengan set value yang ditetapkan
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->