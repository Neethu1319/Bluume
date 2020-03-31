<?php
$con = mysqli_connect(getenv('HOST'), getenv('DB_USER'), getenv('DB_PASSWORD'), getenv('DB_NAME'));
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}else{
 // echo "success";
}
?>
