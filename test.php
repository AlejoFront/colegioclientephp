
<?php
$hoy = getdate();
print_r($hoy);

echo "<br>";

echo $hoy['year']."-".$hoy['mday'];

echo date('Y-m-d');


?>
