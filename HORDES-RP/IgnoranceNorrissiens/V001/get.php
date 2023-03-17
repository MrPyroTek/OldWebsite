<?php
    header('Access-Control-Allow-Origin: *');
?>
<?php
/* GET */
$data = $_GET['data'];
file_get_contents("data.txt", $data);
echo ( file_get_contents("data.txt", $data) );
?>