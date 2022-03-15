<?php
include_once 'connection.php';
?>

<?php
$sql="INSERT INTO Contact (id,firstName,lastName,email,age,salary,address) VALUES (1, 'Alyssia', 'Manzo', 'allysia@gmail.com', '12', '300', 'Tarlac City')";
$stmt=$con->prepare($sql);
if($stmt->execute()){
  echo 'User has been added successfully ';
}else{
  echo 'User has not been added successfully ';
}
?>