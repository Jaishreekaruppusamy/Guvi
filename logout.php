<?php
require 'function.php';
$_SESSION = [];
session_unset();
session_desetroy();
header("Location: login.php");
?>