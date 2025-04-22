<!DOCTYPE html>
<html>
<body>

<?php
function myMessage() {
  echo "Hello world!<br>";
}
myMessage();
?> 

<?php
function familyNameSimple($fname) {
  echo "$fname Refsnes.<br>";
}

familyNameSimple("Jani");
familyNameSimple("Hege");
familyNameSimple("Stale");
familyNameSimple("Kai Jim");
familyNameSimple("Borge");
?>

<?php
function familyNameWithYear($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyNameWithYear("Hege","1975");
familyNameWithYear("Stale","1978");
familyNameWithYear("Kai Jim","1983");
?>

</body>
</html>
