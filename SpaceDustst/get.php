<?php
    header('Access-Control-Allow-Origin: *');
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