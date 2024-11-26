<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/electro.css">
    <style>
        /* Inline Footer Styling */
        .inline-footer {
            background-color: #333;
            color: white;
            padding: 20px 10px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap; /* Ensures responsiveness */
            text-align: left;
            gap: 20px;
        }

        /* Footer Sections */
        .footer-section {
            flex: 1; /* Ensures equal space distribution */
            min-width: 200px;
            max-width: 100%;
        }

        .footer-section h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
            color: #007BFF; /* Theme color */
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
                       <li><a href="appointments.php">Payment</a></li>
                       <li><a href="index.php">Login</a></li>
                   </ul>
                   <div class="burger">
                       <div class="line"></div>
                       <div class="line"></div>
                       <div class="line"></div>
                   </div>
               </nav>
               <h1>View Our Jeweries</h1>
            
    <div class="grid-container">
       
        <div class="grid-item">
            <img src="images/rings.JPG" alt="Product 1">
            <p>Rings</p>
            <div class="actions">
                <span class="price">$15.00</span>
                <button onClick="window.location.href='appointments.php';">Buy Now</button>
            </div>
        </div>

       
        <div class="grid-item">
            <img src="images/bracelet.jpg" alt="Product 2">
            <p>Bracelets</p>
            <div class="actions">
                <span class="price">$35.00</span>
                <button onClick="window.location.href='appointments.php';">Buy Now</button>
                </div>
        </div>

       
        <div class="grid-item">
            <img src="images/earing.jpg" alt="Product 3">
            <p>Earings</p>
            <div class="actions">
                <span class="price">$12.00</span>
                <button onClick="window.location.href='appointments.php';">Buy Now</button>
            </div>
        </div>

       
        <div class="grid-item">
            <img src="images/watch.jpg" alt="Product 4">
            <p>Watches</p>
            <div class="actions">
                <span class="price">$16.00</span>
                <button onClick="window.location.href='appointments.php';">Buy Now</button>
            </div>
        </div>

       
        <div class="grid-item">
            <img src="images/necklace.jpg" alt="Product 5">
            <p>Necklaces</p>
            <div class="actions">
                <span class="price">$15.00</span>
                <button onClick="window.location.href='eappointments.php';">Buy Now</button>
            </div>
        </div>

        
        <div class="grid-item">
            <img src="images/Hair.jpg" alt="Product 6">
            <p>Hair ornament</p>
            <div class="actions">
                <span class="price">$19.00</span>
                <button onClick="window.location.href='appointments.php';">Buy Now</button>
            </div>
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
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="appointment.php">Order</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Contact</h3>
            <p>Email: contact@onlinestore.com</p>
            <p>Phone: 07888867996</p>
        </div>
    </footer>



</body>
</html>