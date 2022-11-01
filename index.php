<?php
require 'function.php';
if(isset($_SESSION["id"])){
$id = $_SESSION["id"];
$user = mysqli_fetch_assoc(musqli_query($con, "SELECT * FROM tb_user WHERE id = $id"));
}
elde{
header ("Location: login.php");
}
?>
<DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Index</title>
</head>
<body>
<h1>Welcome <?php echo $user["name"]?></h1>
<a href="logout.php">Logout</a>
</body>
</html>