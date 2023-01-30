<?php
include_once "class_up.php";

$data = new Data();

$sql="SELECT * FROM `users` ";
print $data->skaityti_n($sql);
print "<br/>";

?>