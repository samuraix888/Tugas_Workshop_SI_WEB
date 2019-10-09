!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php//<?php adalah awal mulai script php dimulai

//Array adalah variabel khusus, yang dapat menyimpan lebih dari satu nilai pada suatu waktu.
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");//array asosiatif adalah array yang menggunakan nama kunci yang Anda tetapkan untuk mereka.
krsort($age);//array semacam asosiatif dalam urutan, menurut kunc

foreach($age as $x => $x_value)/*Untuk loop melalui dan mencetak semua nilai-nilai array asosiatif, Anda bisa menggunakan foreachlingkaran*/ {
    echo "Key=" . $x . ", Value=" . $x_value;// jalankan looping foreach
    echo "<br>";//jalankan pindah baris
}
}
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup h