<!DOCTYPE html>
<html>
<body>

<?php
if (5 > 3) {
  echo "Have a good day!";
}
?>
 
 
<?php
$t = 14;

if ($t == 14) {
  echo "Have a good day!";
}
?> 


<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>

<?php
$a = 5;

if ($a < 10) $b = "Hello";

echo $b
?>


<?php
$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}
?>


</body>
</html>
