<?php
$conn = mysqli_connect('localhost','root','','net_banking');
$sql = mysqli_query($conn, "SELECT `uname` FROM `admin`");

$print_data = mysqli_fetch_row($sql);
echo "Welcome ";
echo $print_data[0];
echo " !"

?>
