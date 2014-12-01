<?php
require_once '../config/db.php'; // The mysql database connection script
session_start();

if(isset($_GET['card'])){
    $card = $_GET['card'];
    $owner = $_SESSION['user_name'];
    $created = date('Y-m-d G:i:s');
    
    $query= "UPDATE cards SET quantity = quantity + 1 WHERE ( name = '$card' AND owner = '$owner')";

        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $result = $mysqli->affected_rows;
        echo $json_response = json_encode($result);
}
?>