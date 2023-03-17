<?php
    header('Access-Control-Allow-Origin: *');
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php

$myfile = fopen($_GET['name'], "w") or die("Unable to open file!");
$txt = $_GET['data'];
fwrite($myfile, $txt);
fclose($myfile);

?>