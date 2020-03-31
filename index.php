<?php
echo "Welcome to Bluume";
$conn = mysqli_connect(getenv('HOST'), getenv('DB_USER'), getenv('DB_PASSWORD'), getenv('DB_NAME'));
print_r(getenv('HOST'));
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
  echo "success";
}
?>
