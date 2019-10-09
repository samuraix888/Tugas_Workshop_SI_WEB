<?php declare(strict_types=1); <?php declare(strict_types=1); // strict requirement, Untuk menentukan strictkita perlu mengatur declare(strict_types=1);. Ini harus berada di baris pertama dari file PHP. Mendeklarasikan menspesifikasikan ketat yang berfungsi panggilan yang dibuat dalam file yang harus secara ketat mematuhi tipe data tertentu
function addNumbers(float $a, float $b) : int /*fungsi dengan satu argumen (float$a, float$b) :int =Untuk menyatakan tipe untuk fungsi kembali, menambahkan usus ( :)*/{
    return (int)($a + $b);//statement immediately terminates the execution of a function when it is called from within that function.
}
echo addNumbers(1.2, 5.2); //jalankan fungsi float dengan hasil 6
?><!--adalah penutup script php-->

