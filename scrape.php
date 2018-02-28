<?php

$data = escapeshellarg($_POST["name"]);
$a = exec('./scrape '.$data);
echo $a;

?>
