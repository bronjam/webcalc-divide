<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
require('divide_function.php');

$output = array(
	"error" => false,
	"string" => "",
	"answer" => 0
);

$x = $_REQUEST['x'];
$y = $_REQUEST['y'];

$answer=divide($x,$y);

$output['string']=$x."/".$y."=".$answer;
$output['answer']=$answer;

echo json_encode($output);
exit();
