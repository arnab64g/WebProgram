<html>
<link rel="stylesheet" href="look.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <head><title> Demo Electronics - Register </title></head>
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
         <h1 style = "padding-left: 50;"> Be a member to get +5% extra discount </h1><br>
         <form action="member.php" method="post">
         <label class = "lreg" > First Name: </label> <input class="reg" name = 'fn' type="text"> <br>
         <label class = "lreg" > Last Name: </label> <input class="reg" name = 'ln' type="text"> <br>
         <label class = "lreg" > Email: </label> <input class="reg" name = 'eml' type="text"> <br>
         <label class = "lreg" > Phone: </label> <input class="reg" name = 'pho' type="text"> <br>
         
         <label class = "lreg" > Address: </label> <input class="reg" name= 'adr' type="text"> <br> 
         <label style="padding-left:60;" > You will be charged BDT 1000/- to be a member. </label> <br>
         <label class = "lreg" > Demo Pay: </label> <input class="reg" type="text"> <br> 
         <input class="regb" type="submit" name = 'mbr'  value= "submit">
    </form> 
    <?php
            $sname = 'localhost';
            $uname = 'root';
            $pswd = '';
            $conn = mysqli_connect($sname, $uname, $pswd);
            $db = mysqli_select_db($conn, 'device_shop');
            if (isset($_POST['mbr'])) {
                $fnm = $_POST['fn'];
                $lnm = $_POST['ln'];
                $em = $_POST['eml'];
                $ph = $_POST['pho'];
                $ad = $_POST['adr'];
                $q = "insert into member(fname, lname, phone, email, address)  values('$fnm', '$lnm', $ph, '$em', '$ad');";
                
                $qry = mysqli_query($conn, $q);  
               
                echo "<h3> Added Successfully </h3>";
                    }
                    else  echo "<h3> Enter Info </h3>";
                   
            ?>    
         </div>
        </body>
        <br><br>
        <footer style="float:right; padding-right: 20;">
            <p> Course Code: CSE 329L</p>
            <p> Course Title: Web Programming Lab. </p>
    </footer> 
</html>