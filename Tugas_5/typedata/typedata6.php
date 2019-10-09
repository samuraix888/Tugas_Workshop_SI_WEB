!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

<?php/*<?php adalah awal mulai script php dimulai*/ 
class Car /*calas bernama car*/{
    function Car()/*function adalah sebuah fungsi milik sendiri dengan nama car*/ {
        $this->model = "VW";/*$this adalah variabel model dnegan value string "VW"*/
    }
}
// membuat objek
$herbie = new Car();

/*echo adalah built-in printout menampilkan objek*/
echo $herbie->model;
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup html-->
