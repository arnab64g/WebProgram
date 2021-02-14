<html>
    <link rel="stylesheet" href="look.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <head><title> Demo Electronics - Administrator </title></head>
    <body style="background-image: url('about-im.jpg');">
    <li style = "padding-right:50; float: right; list-style:none;">  <a style="padding-right:50;"> <i  class="fas fa-phone"></i> Phone: 5644354 </a> 
        <a> <i  class="fas fa-envelope"></i> Email: something@somedomain.com </a> </li> <br>
        <nav class="nav-bar">
            <a class="active" style="float: left;" href="index.php"> Home </a>
            <a class="active" style="float: left;" href="laptop.php">  Laptop </a>
            <a class="active" style="float: left;" href="smartphone.php">  Smartphone </a>
            <a class="active" style="float: left;" href="finddiv.php">  Find Your Device </a>
            <a class="active" style="float: left;" href="about.php">  About </a>
            <a style="float: right; padding-right:100;"  class="active" href="member.php">  Be a Member </a>
            <a style="float: right; " class="active" href="admin.php">  Login </a>
         </nav> <br><br>
         <div style="padding-left: 50;">
         <h1 style = "padding-left: 50;"> Insert Sell Information </h1><br>
        <form action = "dataentry.php" method="post">
         <label class = "lreg" > Model: </label> <input class="reg" name = 'model' type="text"> <br>
         <label class = "lreg" > Product ID: </label> <input class="reg" name = 'prod' type="text"> <br>
         <label class = "lreg" > Cost: </label> <input class="reg" name='cst' type="text"> <br> 
         <label class = "lreg" > Member ID: </label> <input class="reg" name = 'mem' type="text"> Optional <br>
         <input class="regb" type="submit" name="prched" value= "Submit">
</form>
<?php
            $sname = 'localhost';
            $uname = 'root';
            $pswd = '';
            $conn = mysqli_connect($sname, $uname, $pswd);
            $db = mysqli_select_db($conn, 'device_shop');
            if (isset($_POST['prched'])) {
                $mod = $_POST['model'];
                $pid = $_POST['prod'];
                $mid = $_POST['mem'];
                $cost = $_POST['cst'];
                $qr = "insert into sldprod(Sln, customer_ID, model, cost)  values('$pid', $mid, '$mod', $cost);";
               
                $qry = mysqli_query($conn, $qr);  
                echo "<h3> Added Successfully </h3>";
                    }
            ?>
         </div>
         <footer style="float:right; padding-right: 20;">
            <p> Course Code: CSE 329L</p>
            <p> Course Title: Web Programming Lab. </p>
    </footer> 
</html>