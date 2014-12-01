<?php
require_once '../config/db.php'; // The mysql database connection script

$query="select id, name, owner, quantity, color, price from cards ORDER BY time_added DESC";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
 
$arr = array();
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $arr[] = $row;
    }
}
 
    #JSON-encode the response
    echo $json_response = json_encode($arr);
    // echo 'pns';
?>