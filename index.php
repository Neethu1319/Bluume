<?php
echo "Welcome to Bluume";
$conn = mysqli_connect(HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
  echo "success";
}
?>
