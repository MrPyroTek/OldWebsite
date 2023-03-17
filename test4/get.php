<?php
    header('Access-Control-Allow-Origin: *');
?>
<?php
/* GET */
$data = $_GET['data'];
file_get_contents($_GET['name'], $data);
echo ( file_get_contents($_GET['name'], $data) );
?>