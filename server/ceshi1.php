<?php 
$fnName = $_GET['callback'];
$id = $_GET['id'];
$array = array(array(name=>"xiao ming",age=>20),array(name=>"xiao hong",age=>21));
echo $fnName.'('.json_encode($array[$id]).')';
?>
