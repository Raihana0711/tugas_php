<!DOCTYPE html>
<html>
<body>

<?php
// case-sensitive constant name
define("GREETING1", "Welcome to Loktuan!");
echo GREETING1;
?> 

<?php
const MYCAR = "Volvo";
echo MYCAR;
?> 

<?php
define("CARS", [
  "Raihana ",
  "BMW",
  "Toyota"
]);
echo CARS[0];
?> 

<?php
define("GREETING2", "Welcome to Loktuan!");

function myTest() {
  echo GREETING2;
}

myTest();
?> 

</body>
</html>
