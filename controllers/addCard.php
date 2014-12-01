<?php
require_once '../config/db.php'; // The mysql database connection script
session_start();

if(isset($_GET['card'])){
    $card = $_GET['card'];
    $owner = $_SESSION['user_name'];
    $created = date('Y-m-d G:i:s');
    $colors = $_GET['colors'];
    $price = $_GET['price'];





    $query="INSERT INTO cards(name, owner, color, price, time_added) VALUES ('$card', '$owner', '$colors', '$price', '$created')";

        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $result = $mysqli->affected_rows;
        echo $json_response = json_encode($result);
}
?>