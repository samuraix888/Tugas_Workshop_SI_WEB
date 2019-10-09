<?php declare(strict_types=1); // strict requirement, Untuk menentukan strictkita perlu mengatur declare(strict_types=1);. Ini harus berada di baris pertama dari file PHP. Mendeklarasikan menspesifikasikan ketat yang berfungsi panggilan yang dibuat dalam file yang harus secara ketat mematuhi tipe data tertentu

function addNumbers(int $a, int $b) /*fungsi dengan satu argumen (integer $a, integer $b)*/{
    return $a + $b;//statement immediately terminates the execution of a function when it is called from within that function.
}
echo addNumbers(5, "5 days"); //jalankan fungsi
// since strict is enabled and "5 days" is not an integer, an error will be thrown
?>
