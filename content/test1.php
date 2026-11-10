<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {//check only for the request types made via POST request_method.
    require '../includes/db/connect.php';
    
    $conn = new connect();
    
    print_r($conn->connect_DB(1));
} else {
    echo "<p class='bg-danger'>Invalid Request pattern, please correct...</p>";
    die();
}
