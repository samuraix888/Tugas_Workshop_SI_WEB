<?php//<?php adalah awal mulai script php dimulai
/* Struktur = function functionName() {code to be executed;} */
function addNumbers(int $a, int $b)/*fungsi dengan satu argumen (integer $a, integer $b)*/ {
    return $a + $b;//statement immediately terminates the execution of a function when it is called from within that function.
}
echo addNumbers(5, "5 days"); //jalankan fungsi 
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>
