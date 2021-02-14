<html>
<link rel="stylesheet" href="look.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <head><title> Demo Electronics - Log in </title></head>
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
         <h1 style = "padding-left: 50;"> Log in as Administrator </h1><br>         
         <form action="admin.php" method="post">
         <label class = "lreg" > Admin: </label> <input class="reg" type="text" name='uname' id='uname'> <br>
         <label class = "lreg" > Password: </label> <input class="reg" type="password" name="pswd"> <br> <br>
         <input class= "regb" type= "submit" name = 'btn1'  title= "Submit" value="submit"> <br><br>
         </form>
         </div>
    </body>
    <?php
    $sname = 'localhost';
    $uname = 'root';
    $pswd = '';
    $conn = mysqli_connect($sname, $uname, $pswd);
    
if (isset($_POST['btn1'])) {
    $adneme = $_POST['uname'];
    $p = $_POST['pswd'];
    $db = mysqli_select_db($conn, 'device_shop');
    $q = "select  password, aname from admin where aname='$adneme';";
    $qry = mysqli_query($conn, $q);
    $row = mysqli_fetch_assoc($qry);
    if($row['password'] == $p ){
        echo "<h4 style=\"padding-left: 100;\"> You are successfully logged in. </h4><br>";
        echo "<div style=\"width = 300; float:left;\"><li style=\"list-style:none; padding-left:370;\" ><a  class=\"regb\" href= \"dataentry.php\"> Access data. </a></li> </div>";
    }
    else
    echo "<h4 style=\"padding-left: 100;\"> Username or password Error. </h4><br>";
        mysqli_close($conn);
    }
    else echo  "<h4 style=\"padding-left: 100;\"> Insert your username and password. </h4><br>";
?>
    <footer style="float:right; padding-right: 20;">
            <p> Course Code: CSE 329L </p>
            <p> Course Title: Web Programming Lab. </p>
    </footer> 
</html>
