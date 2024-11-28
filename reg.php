<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Include the database connection file
$conn = mysqli_connect('localhost','root','MySQL8.0.39','profile') or die('connection failed');


// Check if the form is submitted

    // Get form data and sanitize inputs
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']); // Hash the password
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phonenumber = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    
    // Handle file upload for image
    $image_name = $_FILES['productimage']['name'];
    $image_tmp = $_FILES['productimage']['tmp_name'];
    $image_type = $_FILES['productimage']['type'];
    $image_folder = 'uploaded_img/'.$image_name;

    // Move uploaded file to desired location
    move_uploaded_file($image_tmp, $image_folder);

    // Insert data into the database
    $query = "INSERT INTO prof (username, password, email, phonenumber, address, imagepath, description) VALUES ('$username', '$password', '$email', '$phonenumber', '$address', '$image_folder', '$description')";
    $result = mysqli_query($conn, $query);

    if($result){
        // If data is inserted successfully, redirect to a success page
        header("Location: empty.php?username=" . $username);

        exit();
    } else {
        // If data insertion failed, display an error message
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }


// Close the database connection
mysqli_close($conn);
?>
