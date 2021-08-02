<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "campus";
$conn = new mysqli($servername, $username, $password,$database_name);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="#">
            <img src="PEC_logo.png" alt="logo" style="width:40px;">
          </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <label for="" style="color:white";>PONDICHERRY ENGINEERING COLLEGE</label>
            </li>
          </ul>
        </div>
      </nav>
      <br><br><br><br>
      <form action="" method="post" style="padding-right: 26%;padding-left: 2%;">
      <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Register Number:</label>
    <div class="col-sm-10">
      <input type="text" name="name" style="width: 41%;" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-10">
      <input type="text" name="loc" style="width: 41%;" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Date of Birth:</label>
    <div class="col-sm-10">
      <input type="date" name="pack" style="width: 41%;" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Gender:</label>
    <div class="col-sm-10">
      <!-- <input type="text" name="date" style="width: 41%;" class="form-control" id="inputEmail3" placeholder="Email"> -->
      <select class="form-control" style="width: 41%;" name="date">
        <option></option>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email-id:</label>
    <div class="col-sm-10">
      <input type="text" name="skil" style="width: 41%;" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Placed:</label>
    <div class="col-sm-10">
      <!-- <input type="text" name="cgpa" style="width: 41%;" class="form-control" id="inputEmail3" placeholder="Email"> -->
      <select class="form-control" style="width: 41%;" name="cgpa">
        <option></option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
    </div>
  </div>
  <!-- <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Backlogs:</label>
    <div class="col-sm-10">
      <input type="text" name="back" style="width: 41%;" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div> -->
  <br><br>
  <button  class="btn btn-primary" name="insstu" type="submit" style="margin-left: 18rem;">SUBMIT</button>
      </form>
<?php
   if(isset($_POST['insstu'])){
    $name = $_POST['name'];
    $loc = $_POST['loc'];
    $pack = $_POST['pack'];
    $date = $_POST['date'];
    $skill = $_POST['skil'];
    $cgpa = $_POST['cgpa'];
    $sql = "INSERT INTO student (id,name,dob,gender,email,placed) VALUES ('$name','$loc','$pack','$date','$skill','$cgpa');";
    if ($conn->multi_query($sql) === TRUE) {
      header('location: student.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
   }
?>      
</body>
</html>