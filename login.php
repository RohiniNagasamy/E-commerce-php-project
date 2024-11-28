<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Product Order Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url("pho.jpg");
        
        background-repeat: no-repeat;
        background-size: cover;
    }

    .container {
        max-width: 400px;
        margin: 20px auto;
        padding: 20px;
        position: relative;
        top: 110px;
        border-radius: 5px;
        background-color: #f9f9f9;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.9);
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    input[type="text"],
    input[type="password"],
    
    select,
    textarea,
    input[type="file"] {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        margin-top: 5px;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
    #top{
        height: 30px;
        width: 100%;
        background-color: rgb(35, 35, 56);
    }
</style>
</head>
<body>
<div id="top"></div>
<div class="container">
    <h2 style="color: #4CAF50;">Login</h2>
    <form action="check.php" method="post">
        <div class="form-group">
            <label for="username">User Name:</label>
            <input type="text" id="username" name="username" required>
        </div>
        
        <div class="form-group">
            <label for="password">password:</label>
            <input type="password" id="password" name="password" required/>
        </div>
        
        <div class="form-group">
            <input type="submit" value="login">
        </div>
    </form>
</div>

</body>
</html>