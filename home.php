<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">

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
            <li><a href="appointments.php">payment</a></li>
            <li><a href="index.php">Login</a></li>
        </ul>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <h1>Welcome to the Platform</h1>
    <div class="container">
        
        <div class="card">
            <img src="images/online.JPEG" alt="Online Classes">
            <p>Digital Courses</p>
            <button onClick="window.location.href='class.php';">View </button>
        </div>

        
        <div class="card">
            <img src="images/electronic.JPEG" alt="Electronics">
            <p>Buy Electronics</p>
            <button onClick="window.location.href='electronic.php';">View Devices</button>
        </div>

       
        <div class="card">
            <img src="images/Clothes.jpg" alt="Clothes">
            <p>Buy Clothes</p>
            <button onClick="window.location.href='Clothes.php';">View Clothes</button>
        </div>

       
        <div class="card">
            <img src="images/jewery.jpg" alt="Second Hand Items">
            <p>Sparkle Jewery</p>
            <button onClick="window.location.href='jewery.php';">View Items</button>
        </div>

       
        <div class="card">
            <img src="images/Health.jpg" alt="Help">
            <p>Health and Wellness product</p>
            <button onClick="window.location.href='health.php';">View products</button>
        </div>
    </div>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <h3>About Us</h3>
            <p>We are a small online store providing quality products at affordable prices.</p>
        </div>
        <footer class="inline-footer">
        <div class="footer-section">
            <h3>About Us</h3>
            <p>We are a small online store providing quality products at affordable prices.</p>
        </div>

        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Contact</h3>
            <p>Email: contact@onlinestore.com</p>
            <p>Phone: (123) 456-7890</p>
        </div>
    </footer>



    <script src="script.js"></script>



</body>
</html>