<?php include('./includes/header.php');  ?>

<?php 
$username = "root"; 
$password = ""; 
$database = "psychometric-test"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM student_info where email='sadaa@sd.com'";



if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
       
        $json_array[]  = $row["answer"]; 
    }
    print(json_encode($json_array));
    $result->free();
} 
?>

<div class="container-fluid  py-3">
    <header class="text-center">

        <img src="./assets/img/alogo.png" class="img-fluid " alt="Acharya Institutes">
    </header>
    <div class=" container text-center heading mt-4 p-2 text-light ">
        <h1 class="font-weight-bold">Acharya Psychometric Test </h1>
    </div>
</div>
<div class="container">
    
<div class="col-md-12 ">
<h1>Result </h1>
<!-- EXTROVERT or INROVERT -->

</div>

<?php include('./includes/footer.php');  ?>