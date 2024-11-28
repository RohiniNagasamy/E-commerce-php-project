<?php
    // Establishing connection to the database
    $conn = mysqli_connect('localhost', 'root', '', 'profile') or die('Connection failed');

    // Query to fetch all products
    $product_query = "SELECT * FROM productcard";
    $product_result = mysqli_query($conn, $product_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
       <link rel="stylesheet" href="styres.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Document</title>
    <style>
      .checked {
  color: orange;
}
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
     
    }
        #top{
        height: 15px;
        width: 100%;
        background-color: rgb(35, 35, 56);
    }
    .container{
        position: relative;
        top: -450px;
        height: auto;
        width: 90%;
        left: 50px;
        margin: 50px;
        
        display: grid;
  grid-template-columns: auto auto auto;
  row-gap: 50px;
  justify-content: space-around;
  border-radius: 5px;
       background-color: aliceblue;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.9);

    .productlist{
        margin-top: 30px;
        margin-bottom: 30px;
        height: 450px;
        width: 350px;
        text-align: center;
        border-radius: 5px;
        background-color: #f9f9f9;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.9);
        button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  margin-top: 10px;

  
}
p{
    margin-bottom: 10px;
  }
    }

    }
    #na{
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.9);
        width: 60%;
     position: relative;
     left: 15%;
     margin-top: 20px;
    }
    li{
        display: inline-block;
        margin: 15px;
        a{
            text-decoration: none;
            color: green;
        }
    }
    .search{
        display: flex;
        flex-direction: row;
        position:relative;
        top:-50px;
        height: 200px;
        justify-content: end;
        align-items: center;
        width: 600px;
        input{
            position: relative;
            left: -500px;
            justify-content: center;
            width: 300px;
            height: 30px;
            margin: 30px;
           
        }
        button{
            //color: #ffffff;
            background: #32cd32;
            position: relative;
            left: -550px;
            width: 80px;
            height: 30px;
        }
    }
    .main{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    
    </style>
</head>
<body>
   
    <div id="top"></div>
   
    <div id="na" class="nav-top">
        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="index.html#ab">About us</a>
            </li>
            <li>
                <a href="index.html#pr">Products</a>
            </li>
            <li>
                <a href="index.html#sc">Scheme</a>
            </li>
            
            <li>
                <a href="index.html#se">Services</a>
            </li>
            <li>
                <a href="index.html#co">Contact us</a>
            </li>
            <li>
                <a href="prolog.html">Log in</a>
            </li>
            <li>
                <a href="proreg.html">Register</a>
            </li>
        </ul>
    </div>
  

    <div class="main">
        <img src="whi.jpg" alt="" height="500px" width="500px">
    <div class="search">
      
      <input type="text">
      <button onclick="filterProducts()"><img src="search.svg" alt=""></button>

    </div>
</div>
    <div class="container">
    <?php
        // Display product list
        if(mysqli_num_rows($product_result) > 0) {
            while($product_row = mysqli_fetch_assoc($product_result)) {
                echo '<div class="productlist">';
                echo '<img src="' . $product_row['proimage'] . '" alt="' . $product_row['proname'] . '" width="100%" height="50%">';
                echo '<h1>' . $product_row['proname'] . '</h1>';
                echo '<h3 class="price">&#8377;' . $product_row['price'] . ' per kg </h3>';
                echo '<p>' . $product_row['description'] . '</p>';
                echo '<span class="fa fa-star checked"></span>';
                echo '<span class="fa fa-star checked"></span>';
                echo '<span class="fa fa-star "></span>';
                echo '<span class="fa fa-star"></span>';
                echo '<span class="fa fa-star"></span>';
                echo '<p><a href="empty.php?username=' . $product_row['username'] . '"><button onclick="contactClicked(this)" id="' . $product_row['proname'] . '">Contact</button></a></p>';
                echo '</div>';
            }
        } else {
            echo "No products found.";
        }
        ?>
        

    </div>
    <script>
    function filterProducts() {
        var input, filter, container, productlist, h1, i, txtValue;
        input = document.querySelector('input[type="text"]');
        filter = input.value.toUpperCase();
        container = document.querySelector('.container');
        productlist = container.querySelectorAll('.productlist');

        for (i = 0; i < productlist.length; i++) {
            h1 = productlist[i].querySelector('h1');
            txtValue = h1.textContent || h1.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                productlist[i].style.display = "";
            } else {
                productlist[i].style.display = "none";
            }
        }
    }
</script>
 <script>
         function contactClicked(button) {
            var productName = button.id; // Extract product name from button id
            var currentTime = new Date().toISOString().slice(0, 19).replace('T', ' '); // Get current time

            // Send AJAX request to store data in the database
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'store_data.php?productName=' + encodeURIComponent(productName) + '&time=' + encodeURIComponent(currentTime), true);
            xhr.send();
        }
    </script>

</body>
</html>