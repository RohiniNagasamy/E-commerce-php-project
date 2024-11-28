<?php
// Enable error reporting (for development only)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file
$conn = mysqli_connect('localhost', 'root', 'MySQL8.0.39', 'profile') or die('Connection failed');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize inputs
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Perform a query to retrieve the user's information
    $query = "SELECT * FROM prof WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Check if the provided password matches the stored password
        if ($password == $row['password']) {
            // Password matches, login successful
            header("Location: productcard.html"); // Redirect to dashboard or any other page
            exit();
        } else {
            // Password doesn't match, display an error message
            echo "Invalid password.";
        }
    } else {
        // User not found, display an error message
        echo "User not found.";
    }
}

// Close the database connection
mysqli_close($conn);
?>
