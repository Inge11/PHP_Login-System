<?php echo "test" ?>
<?php if(!defined('__CONFIG__')) {
       exit('You do not have a config');
}

include_once 'classes/DB.php';
$conn=DB::getConnection();
?>