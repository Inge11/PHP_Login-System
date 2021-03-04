<?php echo "Whats wrong?";
 define('__CONFIG__',true);
require_once "../inc/config.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
header('Content-Type:application/json');

$return=[];
$return['redirect']='/deashboard.php';
$return['name']="Kalob Taulien";

//$array=['test','test2','test3',array('name'=>'Kalob','lastname'=>'Taulien')];
//echo json_encode($array,JSON_PRETTY_PRINT);

}else{
    exit('test');
}



?>