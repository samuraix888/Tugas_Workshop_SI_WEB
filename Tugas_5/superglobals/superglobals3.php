!DOCTYPE html> <!--documen yang diproses adalah html-->
<html><!--pemrograman kode html dimulai-->
<body><!--body open/tubuh, isinya ya semua elemen elemen yg ditampilin di web kaya gambar, paragraf dll-->

	<!--PHP $ _REQUEST digunakan untuk mengumpulkan data setelah mengirimkan formulir HTML-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"><!--bentuk data dikirim ke file yang ditentukan dalam atribut aksi <form> tag-->
  Name: <input type="text" name="fname">
  <input type="submit"><!--etika pengguna mengirimkan data dengan mengklik "Submit",-->
</form>

<?php//<?php adalah awal mulai script php dimulai
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']); //if else
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?><!--adalah penutup script php-->

</body><!--penutup body-->
</html> <!--penutup h