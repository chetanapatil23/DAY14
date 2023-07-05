<!DOCTYPE html>
<html>
<body>
<?php
$name = array("hema", "sapna", "preeti"); 
echo "my friends are " . $name[0] . "," . $name[1] . " and " . $name[2] ."<br>";
$age = array("hema"=>"20", "sapna"=>"19", "preeti"=>"20");
foreach($age as $x => $x_value) {
  echo "name=" . $x . ", age=" . $x_value;
  echo "<br>";
}
?>

</body>
</html>
