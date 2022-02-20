<?php
$server = "localhost";
// $server = "sql201.epizy.com";
// $username = "epiz_31003350";
$username = "root";
// $password = "2IaePdHd5Aw1Nc";
$password = "";
// $database = "epiz_31003350_users";
$database = "users";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>
