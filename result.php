<?php include('./includes/header.php');  ?>

<?php
include('includes/connect.php');

$sql = "select * from test_result where code='ISTJ'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res);
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
  <!-- <div class="row">
    <div class="col ">
      <h2  >Your Strengths:</h2>
    </div>
    <div class="col ">
    <h2><?php echo $row['strength'];?></h2>
    </div>
    <div class="row">
    <div class="col ">
      <h2  >Your Strengths:</h2>
    </div>
    <div class="col ">
    <h2><?php echo $row['carrers'];?></h2>
      
    </div>
  </div> -->

  <div class="row">
  <div class="col">Your Strengths:</div>
  <div class="col"><?php echo $row['strength'];?></div>
  <div class="w-100"></div>
  <div class="col">Suggested Carrers:</div>
  <div class="col"><?php echo $row['carrers'];?></div>
</div>
</div>


<script>
    function prettyJ(json) {
  if (typeof json !== 'string') {
    json = JSON.stringify(json, undefined, 2);
  }
  return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, 
    function (match) {
      let cls = "\x1b[36m";
      if (/^"/.test(match)) {
        if (/:$/.test(match)) {
          cls = "\x1b[34m";
        } else {
          cls = "\x1b[32m";
        }
      } else if (/true|false/.test(match)) {
        cls = "\x1b[35m"; 
      } else if (/null/.test(match)) {
        cls = "\x1b[31m";
      }
      return cls + match + "\x1b[0m";
    }
  );
}
</script>

$json

<!-- EXTROVERT or INROVERT -->

</div>

<?php include('./includes/footer.php');  ?>