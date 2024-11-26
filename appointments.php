<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/electro.css">
</head>
<body>
<div>
               
               <h1 style="font-family: cursive;">  ONLINE SIX PAYMENTS <img src="logo.jpg" style="width:50px;height:15px;"></h1> 
                      
               </div>
               <nav class="navbar">
                   <div class="logo"><i><b>SIX</b></i></div>
                   <ul class="nav-links">
                       <li><a href="home.php">Home</a></li>
                       <li><a href="about.php">About</a></li>
                       <li><a href="payments.php">payment</a></li>
                       <li><a href="index.php">Login</a></li>
                   </ul>
                   <div class="burger">
                       <div class="line"></div>
                       <div class="line"></div>
                       <div class="line"></div>
                   </div>
               </nav>
               <h1>Welcome to the Platform</h1>
               <h1>Pay Class</h1>
    <div class="form-container">
        <form method="POST">
            
            <div class="form-group">
                <label for="name">date of time</label>
                <input type="date" id="date" name="date" placeholder="Enter your name" required>
            </div>


         
            <div class="form-group">
                <label for="item">Select Item</label>
                <input type="text" name="item" id="item">
                </div>
                <div class="form-group">
                <label for="item">Pay With</label>
                <select id="p_method" name="p_method" required>
                    <option value="">--Select an Item--</option>
                    <option value="product1">Credit card</option>
                    <option value="product2">PayPal</option>
                    <option value="product3">VisaCard</option>
                    <option value="product3">DebitCard</option>
                </select>
                </div>
                     
            <div class="form-group">
                <label for="name">payment method numbers</label>
                <input type="numbers" id="m_numbers" name="m_numbers" placeholder="Enter your card number" required>
            </div>

<div class="form-group">
    <button type="submit" name="btn" class="btn">Submit Order</button>
</div>
</form>
</div>


</body>
</html>
<?php
require'connection.php';
if (isset($_POST['btn'])){
if($_SERVER['REQUEST_METHOD']=='POST'){
    $date=$_POST['date'];
    $item=$_POST['item'];
    $p_method=$_POST['p_method'];
    $m_numbers=$_POST['m_numbers'];
    $sql="INSERT INTO payments(item_name,payment_method,payment_numbers,date)VALUE('$item','$p_method','$p_numbers','$date')";
    $res=mysqli_query($con,$sql)
    or die("INSERT failed :".mysqli_connect_error($con));
    header('Location:signup.php');
}
}
?>