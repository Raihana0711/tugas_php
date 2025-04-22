<!DOCTYPE html>
<html>
<body>
<pre>

<?php
// Array biasa
$cars = array("Volvo", "BMW", "Toyota"); 
var_dump($cars);
?>

<?php  
// Function example:
function myFunction() {
  echo "This text comes from a function\n";
}

// Create array dengan function sebagai elemen (tanpa eksekusi)
$myArr = array("Volvo", 15, ["apples", "bananas"], 'myFunction');

// Memanggil fungsi dari array
$myArr[3](); // ini akan menjalankan myFunction
?>  

<?php
// Hitung jumlah elemen array
$cars = array("Volvo", "BMW", "Toyota");
echo "\nJumlah mobil: " . count($cars);
?>

</pre>
</body>
</html>
