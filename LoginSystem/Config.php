<?php header('Access-Control-Allow-Origin: *');?>
<?php header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');?>
<?php header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT');?>

<?PHP

$db_host = "localhost";
$db_username = "root";
$db_pass = "T727iaan77";
$db_name = "LoginDB";

$conn = mysqli_connect($db_host, $db_username, $db_pass) or die("Could not connect to DataBase");
mysqli_select_db($conn, $db_name) or die("Unknown DataBase");

?>