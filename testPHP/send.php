<?php
    header('Access-Control-Allow-Origin: *');
?>
<?php

$myfile = fopen($_GET['name'], "w") or die("Unable to open file!");
$txt = $_GET['data'];
fwrite($myfile, $txt);
fclose($myfile);

?>