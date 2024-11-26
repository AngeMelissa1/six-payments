<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">
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
               <h1>Welcome to the Platform</h1><br><br>
           
               <?php 
               include 'connection.php';
               $sel = "select * from health";
               $res = $con->query($sel);
               ?>
               <center><h2><u>list of electro</u></h2></center>
               
               <table border="1"; style="width:50%";>

                <tr>
                    <th>number</th>
                    <th>product name</th>
                    <th>stock status</th>
                </tr>
                <?php
                if ($res->num_rows > 0){
                while ($row= $res->fetch_assoc()){
                    echo "<tr>
                    <td>{$row['hel_id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['stock']}</td>
                    </tr>";
                }}
                else {
                    echo "<tr><td colspan='3'>No data found</td></tr>";
                }
                ?>
                </table>
                


               
</body>
</html>
    