!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php/*<?php adalah awal mulai script php dimulai*/ 
$favcolor = "red";

switch /*memilih salah satu dari banyak blok kode yang akan dieksekusi*/($favcolor)/*variabel favcolor*/ {
    case "red"://case dengan label pertama
        echo "Your favorite color is red!";
        break;//jeda
    case "blue"://case dengan label kedua
        echo "Your favorite color is blue!";
        break;//jeda
    case "green"://case dengan label ketiga
        echo "Your favorite color is green!";
        break;//jeda
    default://standar
        echo "Your favorite color is neither red, blue, nor green!";
}
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->
