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
    <label for="inputEmail3" class="col-sm-2 col-form-label">Company Name:</label>
    <div class="col-sm-10">
      <input type="text" name="name" style="width: 41%;" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Location:</label>
    <div class="col-sm-10">
      <input type="text" name="loc" style="width: 41%;" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Package:</label>
    <div class="col-sm-10">
      <input type="text" name="pack" style="width: 41%;" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Date:</label>
    <div class="col-sm-10">
      <input type="date" name="date" style="width: 41%;" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Skills:</label>
    <div class="col-sm-10">
      <input type="text" name="skil" style="width: 41%;" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">CGPA:</label>
    <div class="col-sm-10">
      <input type="text" name="cgpa" style="width: 41%;" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Backlogs:</label>
    <div class="col-sm-10">
      <input type="text" name="back" style="width: 41%;" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  <br><br>
  <button  class="btn btn-primary" name="ins" type="submit" style="margin-left: 18rem;">SUBMIT</button>
      </form>
<?php
   if(isset($_POST['ins'])){
    $name = $_POST['name'];
    $loc = $_POST['loc'];
    $pack = $_POST['pack'];
    $date = $_POST['date'];
    $skill = $_POST['skil'];
    $cgpa = $_POST['cgpa'];
    $back = $_POST['back'];
    $sql = "INSERT INTO details (name,location,package,date,skills,mark,backlogs) VALUES ('$name','$loc','$pack','$date','$skill','$cgpa','$back');";
    if ($conn->multi_query($sql) === TRUE) {
      header('location: welcome.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
   }
?>      
</body>
</html>