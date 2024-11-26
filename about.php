<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/class.css">
    <style>
        
        .inline-footer {
            background-color: #333;
            color: white;
            padding: 20px 10px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap; 
            text-align: left;
            gap: 20px;
        }

        
        .footer-section {
            flex: 1; 
            min-width: 200px;
            max-width: 100%;
        }

        .footer-section h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
            color: #007BFF; 
        }
        .footer-section p,
        .footer-section ul {
            font-size: 0.9em;
            line-height: 1.5;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-section ul li {
            margin-bottom: 5px;
        }

        .footer-section ul li a {
            text-decoration: none;
            color: white;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: #007BFF;
        }

        
        @media (max-width: 768px) {
            .inline-footer {
                flex-direction: column; 
                text-align: center;
            }

            .footer-section {
                max-width: none;
            }
        }
    </style>
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
                       <li><a href="appointments.php">Payments</a></li>
                       <li><a href="index.php">Login</a></li>
                   </ul>
                   <div class="burger">
                       <div class="line"></div>
                       <div class="line"></div>
                       <div class="line"></div>
                   </div>
               </nav><br>
               <h2>Welcome To Online Six Payments We Offer Online Stock To Our Products And Paymet for them Online</h2><br>
               <center><h2>ere's a list of one of our products</h2></center>


               <h1></h1>
    <div class="invoice-container">
    
        <div class="invoice-item">
            <div class="details">
                <img src="images/online.JPEG" alt="Item 1">
                <p>Online courses</p>
            </div>
            <div class="actions">
                <span class="price">VIEW DIGITAL CLASS</span>
                <button onClick="window.location.href='table2.php';">Appoint Now</button>
            </div>
        </div>

        
        <div class="invoice-item">
            <div class="details">
                <img src="images/electronic.JPEG" alt="Item 2">
                <p>ELECTRONICS</p>
            </div>
            <div class="actions">
                <span class="price">VIEW ITEMS</span>
                <button onClick="window.location.href='table1.php';">view</button>
            </div>
        </div>
        
        <div class="invoice-item">
            <div class="details">
                <img src="images/Clothes.jpg" alt="Item 3">
                <p>CLOTHES</p>
            </div>
            <div class="actions">
                <span class="price">VIEW CLOTHES</span>
                <button onClick="window.location.href='table3.php';">Buy Now</button>
            </div>
        </div>
        <div class="invoice-item">
            <div class="details">
                <img src="images/jewery.jpg" alt="Item 3">
                <p>SPARKLE JEWERY</p>
            </div>
            <div class="actions">
                <span class="price">VIEW JEWERIES</span>
                <button onClick="window.location.href='table4.php';">VIEW</button>
            </div>
        </div>
        <div class="invoice-item">
            <div class="details">
                <img src="images/Health.jpg" alt="Item 3">
                <p>HEALTH AND WELLNESS</p>
            </div>
            <div class="actions">
                <span class="price">VIEW PRODUCTS</span>
                <button onClick="window.location.href='table5.php';">VIEW</button>
            </div>
        </div>
    </div>




</body>
</html>