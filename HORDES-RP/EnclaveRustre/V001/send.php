<?php
    header('Access-Control-Allow-Origin: *');
?>
<?php

file_put_contents("data.txt", $_GET['data']);

?>