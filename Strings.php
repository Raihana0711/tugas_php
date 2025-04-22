<!DOCTYPE html>
<html>
<body>

<?php
echo "Hello";
print "Hello";
?>

<?php
$x = "Hello Raihana!";
echo strtoupper($x);
?> 

<?php
$x = "Hello";
$y = "Raihana";
$z = $x . $y;
echo $z;
?>

<?php
$x = "Hello Raihana!";
echo substr($x, 6, 5);
?> 

<?php
// PHP will raise an error if quotes are not escaped correctly:
$x = "We are the so-called \"Vikings\" from the north.";
echo $x;
?> 

</body>
</html>
