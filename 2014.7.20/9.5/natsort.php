<?php
$data = array("file1.txt","file11.txt","File2.txt","FILE12.txt","file.txt");
natsort($data);
print_r($data);
natcasesort($data);
print_r($data);
?>