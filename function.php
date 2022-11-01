<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "loginregister");
if(isset($_POST["action"])){
if($_POST["action"] == "register"){
register();
}
else if($_POST["action"] =="login"){
login();
}
}
function register(){
global $conn;
$name = $_POST["name"];
$username =$_POST["username"];
$password =$_POST["password"];
if(empty($name) || empty($username) || empty($password)){
echo "Please Fill Out The Form!";
exit;
}
$user = mysqli_query($con, "SELECT * from tb_user WHERE username = '$username'");
if(mysqli_num_rows($user) > 0){
echo "Username Has Already Taken";
exit;
}
$query = "INSERT INTO tb_user VALUES('', '$name', '$username', '$password')";
mysqli_query($con,$query);
echo "Register Successfully";
}
function login(){
global $conn;
$username = $_POST["username"];
$username = $_POST["password"];
$user = musqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
if(mysqli_num_rows($user) > 0){
$row = mysqli_fetch_assoc($user);
if($password == $row["password"]){
echo "Login Successfully";
$_SESSION["login"] = TRUE;
$_SESSION["id"] = $row["id"];


}
else{
echo "Wrong Password";
exit;
}
else{
echo "User Not Registered";
exit;
}
?>