<?php
    header('Access-Control-Allow-Origin: *');
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
$data = $_GET['data'];
if (file_exists($_GET['name'])) {
    file_get_contents($_GET['name'], $data);
echo ( file_get_contents($_GET['name'], $data) );
} else {
    echo "NONE";
}
?>