<html>
    <link rel="stylesheet" href="look.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <head><title> Demo Electronics - Find Your Device </title></head>
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
         <h2 style = "padding-left: 50;"> Insert Pour Product ID </h2><br> 
        <form action = "finddiv.php" method="post">
        <label class = "lreg" > Product ID: </label> <input class="reg" name="sln" id="sln" type="text"> <br><br>
        <input class="regb" type="submit" name = "src"  value= "Search">
</form>
         </div>
         <?php
            $sname = 'localhost';
            $uname = 'root';
            $pswd = '';
            $conn = mysqli_connect($sname, $uname, $pswd);
            $db = mysqli_select_db($conn, 'device_shop');
            if (isset($_POST['src'])) {
                $sl = $_POST['sln'];
                $q = "select customer_ID, model, cost from sldprod where Sln = '$sl';";
                $qry = mysqli_query($conn, $q);
                $row = mysqli_fetch_assoc($qry);
                if ($row) {
                    echo "<div style=\"float: right; margin-right: 20; width: 500; float: top;\">";
                    $mod = $row['model'];
                    $q1 = "select  brand, ram, processor, imageul, storage, display from productslist where model='$mod';";
                    $qry1 = mysqli_query($conn, $q1);
                    $row1 = mysqli_fetch_assoc($qry1);
                    $imagul = "image/".$row1['imageul'].".jpg";
                    echo "<img style=\"width: 250; height:250;\" src = $imagul>";
                    echo "<h3>" .$row1['brand'] ;
                    echo " ".$row['model']."</h3><h4>".$row1['processor']."<br>".$row1['ram']."<br>Cash: ".$row['cost']."/-";
                    echo "<br> Storage: ".$row1['storage']." ";
                    echo "<br> Display: ".$row1['display']."</h4>";
                    echo "</div>";
                    if($row['customer_ID'] != null){
                        $v = $row['customer_ID'];
                        $q1 = "select fname, lname, address, phone, email from member where mid = $v;";
                        $qry1 = mysqli_query($conn, $q1);
                        $row1 = mysqli_fetch_assoc($qry1);
                        echo "<div style=\" margin: 100; width: 500; float: top;\">";
                        echo "<h3>Name: " .$row1['fname'] ;
                    echo " ".$row1['lname']."</h3><h4>Phone: ".$row1['phone']."<br>Email: ".$row1['email']."<br>Address ".$row1['address'];
                    echo "</h4>";
                    echo "<div>";  
                    }
                }
                else echo "<h2> Not found </h2>";
            }
            ?>
</body>
<footer style="float:right; padding-right: 20;">
            <p> Course Code: CSE 329L</p>
            <p> Course Title: Web Programming Lab. </p>
    </footer> 
</html>