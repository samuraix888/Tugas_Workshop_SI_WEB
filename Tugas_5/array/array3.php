<?php declare(strict_types=1);// strict requirement, Untuk menentukan strictkita perlu mengatur declare(strict_types=1);. Ini harus berada di baris pertama dari file PHP. Mendeklarasikan menspesifikasikan ketat yang berfungsi panggilan yang dibuat dalam file yang harus secara ketat mematuhi tipe data tertentu ?>
!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php//<?php adalah awal mulai script php dimulai

//Array adalah variabel khusus, yang dapat menyimpan lebih dari satu nilai pada suatu waktu.
$cars = array("Volvo", "BMW", "Toyota");//Sebuah array menyimpan beberapa nilai dalam satu variabel tunggal(array lingkaran)
$arrlength = count($cars);//The count()Fungsi digunakan untuk mengembalikan panjang (jumlah elemen) array:

for($x = 0; $x < $arrlength; $x++) /*Untuk loop melalui dan mencetak semua nilai-nilai array diindeks, Anda bisa menggunakan for*/{
    echo $cars[$x];//janlankan for
    echo "<br>";//jalankan pindah baris
}
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->