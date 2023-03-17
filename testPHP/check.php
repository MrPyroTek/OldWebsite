<?php
    header('Access-Control-Allow-Origin: *');
?>
<?php
$filename = $_GET['name'];

if (file_exists($filename)) {
    echo "1";
} else {
    echo "0";
}
?>
