<?php
include('connect.php');
$sname=$_POST['sname'];
$grade=$_POST['grade'];
$stream=$_POST['stream'];
$email=$_POST['email'];
$country=$_POST['country'];
$phno=$_POST['phno'];


$sql="insert into student_info values(null,'$sname','$grade','$stream','$email','$country','$phno')";

mysqli_query($conn,$sql);

?>  
<script>
alert("emp details inserted successfully");
document.location="./index.php";
</script>