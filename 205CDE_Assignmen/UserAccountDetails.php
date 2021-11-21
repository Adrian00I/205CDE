<?php 

include("header.php");

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
        <link rel="stylesheet" type="text/css" href="css/UserAccount.css">
</head>
<body>
     <h1>NAME <?php echo $_SESSION['name']; ?></h1>
     <h1>USERNAME <?php echo $_SESSION['uname']; ?></h1>
     <nav class="home-nav">
        <a href="change_password.php">Change Password</a>
        <a href="logout.php">Logout</a> 
     </nav>
</body>
</html>

<?php 
}else{
     header("Location: UserAccount.php");
     exit();
}
 ?>