<?php
    // Establishing connection to the database
    $conn = mysqli_connect('localhost', 'root', 'MySQL8.0.39', 'profile') or die('Connection failed');

    // Retrieving username from the GET request
    if(isset($_GET['username'])) {
        $username = $_GET['username'];

        // Query to fetch user data based on the provided username
        $query = "SELECT * FROM prof WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        // Fetching the data and populating the variables
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $phone = $row['phonenumber'];
            $email = $row['email'];
            $discr = $row['description'];
            $imgprof = $row['imagepath'];
        } else {
            // Handle case where username doesn't exist
            echo "User not found!";
            exit; // Stop further execution
        }

        // Query to fetch products based on the provided username
        $product_query = "SELECT * FROM productcard WHERE username = '$username'";
        $product_result = mysqli_query($conn, $product_query);
    } else {
        // Handle case where username parameter is not provided
        echo "Username parameter is missing!";
        exit; // Stop further execution
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         #top{
        height: 30px;
        width: 100%;
        background-color: rgb(35, 35, 56);
    }
    .checked {
  color: orange;
}
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
     
    }
        #top{
        height: 30px;
        width: 100%;
        background-color: rgb(35, 35, 56);
    }
    .container{
        position: relative;
        top: 50px;
        height: 700px;
        overflow: scroll;
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
     left: 25%;
     margin-top: 40px;
    }
    li{
        display: inline-block;
        margin: 15px;
        a{
            text-decoration: none;
            color: green;
        }
    }
    .mainbar{
        height: 400px;
        margin-left: 150px;
        width: 80%;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.9);
        display: flex;
        justify-content: space-around;
        .left{
            width: 45%;
            height: 100%;
            img{
                height: 100%;
                width: 100%;
            }
        }
        .right{
            width: 50%;
        }
       
    }
    .left{
            width: 45%;
            height: 100%;
            img{
                height: 100%;
                width: 100%;
            }
        }
        .right{
            width: 50%;
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
                <a href="login.php">Log in</a>
            </li>
            <li>
                <a href="proreg.html">Register</a>
            </li>
            
        </ul>
    </div>
    <div class="mainbar">
        <div class="left">
         <img id="imgprof" src="<?php echo $imgprof; ?>" alt="">

        </div>
        <div class="right">
            <h1 id="username"> <?php echo $username; ?></h1>
            <p>The products are grown from our field.</p>
            <H1>To contact</H1>
            <p>Mobile no:<span id="phone"><?php echo $phone; ?></span></p>
            <p>Email:<span id="email"><?php echo $email; ?></span></p>
            <p id="discr" ><?php echo $discr; ?></p>
        <a href="#pp" style="text-decoration: none;
        font-size: 20px;
        background-color: rgb(19, 250, 31);
        padding: 15px;
        border-radius: 10px;
       
        position: relative;
        top: 10px;
        ">Products</a>
        
        </div>
    </div>
    <h1 style="text-align: center; position: relative; top: 20px;">Products that are available</h1>
    <div id="pp" class="container">
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
                    echo '<p><button>To contact</button></p>';
                    echo '</div>';
                }
            } else {
                echo "No products found for this user.";
            }
        ?>

      
        

    </div>
    <div class="repot" style="height: 300px; width: 100%; position: relative;
    top: 100px;
    display: flex;
    justify-content: space-between;
    color: #f9f9f9;
    background-color: rgb(3, 3, 49);
   
    ">
        <div class="left">
            
            <h1 >terms and condition</h1><br>
            <p>If any store found to be increases a money more than of actual price in a website then,we will take severe actions.</p>
            <p>If a product receives in a damage condition its all upto the seller and the customer.</p>
            <p>Any queries ,contact us freshproduct</p>
            
        </div>
        <div style=" border-left: 3px solid rgb(253, 253, 253); text-align: center;" class="right">
            <h1>Report</h1>
            
            <textarea name="" id="" cols="30" rows="8"></textarea>
            <input type="submit">
        </div>
    </div>
</body>
</html>