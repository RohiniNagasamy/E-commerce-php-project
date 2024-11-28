<?php
    // Establishing connection to the database
    $conn = mysqli_connect('localhost', 'root', 'MySQL8.0.39', 'profile') or die('Connection failed');

    // Retrieving data from the AJAX request
    $productName = $_GET['productName'];
    $time = $_GET['time'];
    $userIP = $_SERVER['REMOTE_ADDR'];

    // Query to insert data into the 'iptracker' table
    $insert_query = "INSERT INTO iptracker (product_name, user_ip, time_clicked) VALUES ('$productName', '$userIP', '$time')";
    mysqli_query($conn, $insert_query);

    mysqli_close($conn);
?>
