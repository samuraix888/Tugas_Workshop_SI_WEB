!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php/*<?php adalah awal mulai script php dimulai*/ 
$t = date("H");//deklarasi variabel t dengan value hours( 24 jam)
echo "<p>The hour (of the server) is " . $t; //echo adalah built-in printout menampilkan hasil  string + variabel t
echo ", and will give the following message:</p>";//echo adalah built-in printout menampilkan hasil  string 

if ($t < "10") /*jikalau value variabel t kurang dari 10 */{
    /*maka*/echo "Have a good morning!";
} elseif/*eksekusi kode lain*/ ($t < "20") /*jikalau value variabel t kurang dari 20 */{
    /*maka*/echo "Have a good day!";
} else /*eksekusi kode lain jika tidak ada yang memenuhi syarat*/{
    /*maka*/echo "Have a good night!";
}
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->
