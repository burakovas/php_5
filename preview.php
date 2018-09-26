<?php
$id = $_GET['id'];
//echo $id;

$conn2 = mysqli_connect("10.8.0.1","php1user","php1user","php1L5");
$sql1 = "SELECT * FROM images";
$sql2 = "UPDATE images
SET popularity = popularity + 1
WHERE id= $id";

if (!$res = mysqli_query($conn2, $sql1)){
  var_dump(mysqli_error($conn2));
} 

if (!$res2 = mysqli_query($conn2, $sql2)){
  var_dump(mysqli_error($conn2));
} 


while($row1 = mysqli_fetch_row($res)){
  if($row1[0] == $id){echo "<img src='img/$row1[1]' alt=''/>";}
}

mysqli_close($conn2);
?>