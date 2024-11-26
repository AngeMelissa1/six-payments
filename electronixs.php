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
                       <li><a href="#">About</a></li>
                       <li><a href="#">Payments</a></li>
                       <li><a href="#">Contact</a></li>
                       <li><a href="login.php">Login</a></li>
                   </ul>
                   <div class="burger">
                       <div class="line"></div>
                       <div class="line"></div>
                       <div class="line"></div>
                   </div>
               </nav>
               <h1>Order A Device</h1>
               <div class="form-container">
        <form>
            <!-- Name Field -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>

            <!-- Email Field -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <!-- Item Selection -->
            <div class="form-group">
                <label for="text"> Product</label>
                <input type="text" id="text" name="product" placeholder="Enter your product" required>
                </div>
                <div class="form-group">
                <label for="item">Pay With</label>
                <select id="item" name="item" required>
                    <option value="">--Select mode of payment--</option>
                    <option value="product1">Credit card</option>
                    <option value="product2">PayPal</option>
                    <option value="product3">VisaCard</option>
                    <option value="product3">DebitCard</option>
                </select>
                </div>
                            <!-- Name Field -->
            <div class="form-group">
                <label for="name">payment</label>
                <input type="numbers" id="name" name="name" placeholder="Enter your card number" required>
            </div>

<!-- Submit Button -->
<div class="form-group">
    <button type="submit">Submit Order</button>
</div>
</form>
</div>
</body>
</html>