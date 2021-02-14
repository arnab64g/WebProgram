<html>
    <link rel="stylesheet" href="look.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <head><title> Demo Electronics - Smartphone </title></head>
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
         
         <?php
            $sname = 'localhost';
            $uname = 'root';
            $pswd = '';
            $conn = mysqli_connect($sname, $uname, $pswd);
            $db = mysqli_select_db($conn, 'device_shop');
            $q = "select  brand, model, cost, ram, processor, imageul, storage, display from productslist where type='Smartphone';";
            $qry = mysqli_query($conn, $q);
            echo "<table style=\"width: 900\">";
            while($row = mysqli_fetch_assoc($qry)) {
                echo "<tr style =\"height:200\">";
            
                $imagul = "image/".$row['imageul'].".jpg";
                echo "<td> <img width = \"200\" src=$imagul></td>";
                echo "<td><h5>  ".$row['brand'].  "<br><br>    ".$row['model']." <br><br> Price: ". $row['cost']."/- </h5><br></td>";
                echo "<td><h5>".$row['processor'].  "<br><br>".$row['ram']." <br><br> Storage: ". $row['storage']."<br><br>".$row['display']." </h5><br></td>";
                echo "<td><li style=\"width: 200;
                text-align: center;
                list-style: none;
                color: white;
                font-size: 20;\"><a href=\"product.php\" style=\"border-style: hidden;
                font-size: medium;
                background-color: rgb(9, 83, 219);
                color: rgb(221, 250, 255);
                padding: 10;
                text-decoration: none;
                margin-bottom: 20;\">Buy Now </a></li><br><br><li style=\"width: 200;
                text-align: center;
                list-style: none;
                color: white;
                font-size: 20;\"><a href=\"product.php\"
                style=\"border-style: hidden;
                font-size: medium;
                background-color: rgb(9, 83, 219);
                color: rgb(221, 250, 255);
                padding: 10;
                text-decoration: none;
                margin-bottom: 20;\"   value = \"Order\"> Order </a></li></td>";
                echo "</tr>";
              }
              echo "</table>";
            ?>
            
    </body>
    <footer style="float:right; padding-right: 20;">
            <p> Course Code: CSE 329L</p>
            <p> Course Title: Web Programming Lab. </p>
    </footer> 
</html>