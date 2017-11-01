<?php 
$fnName = $_GET['callback'];
$array = array(name=>"xiao ming",age=>20);
echo $fnName.'('.json_encode($array).')';
?>
