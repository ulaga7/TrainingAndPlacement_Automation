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
    <title>Update Student</title>
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
      <input type="text" name="no" style="width: 41%;" class="form-control" id="no" onkeyup="getdetail(this.value)" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-10">
      <input type="text" name="name" style="width: 41%;" class="form-control" id="name" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Date of Birth:</label>
    <div class="col-sm-10">
      <input type="date" name="dob" style="width: 41%;" class="form-control" id="dob" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Gender:</label>
    <div class="col-sm-10">
      <!-- <input type="text" name="date" style="width: 41%;" class="form-control" id="inputEmail3" placeholder="Email"> -->
      <select class="form-control" style="width: 41%;" name="gender" id="gender">
        <option></option>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email-id:</label>
    <div class="col-sm-10">
      <input type="email" name="email" style="width: 41%;" class="form-control" id="email" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="placed" class="col-sm-2 col-form-label">Placed:</label>
    <div class="col-sm-10">
      <!-- <input type="text" name="cgpa" style="width: 41%;" class="form-control" id="inputEmail3" placeholder="Email"> -->
      <select class="form-control" style="width: 41%;" name="placed" id="placed">
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
  <button  class="btn btn-primary" name="updstu" type="submit" style="margin-left: 18rem;">SUBMIT</button>
      </form>
      <?php
      if(isset($_POST['updstu'])){
       $name = $_POST['no'];
       $loc = $_POST['name'];
       $pack = $_POST['dob'];
       $date = $_POST['gender'];
       $skill = $_POST['email'];
       $cgpa = $_POST['placed'];
       $sql="UPDATE student SET name='$loc',dob='$pack',gender='$date',email='$skill',placed= '$cgpa' WHERE id='$name'";
       if ($conn->multi_query($sql) === TRUE) {
         header('location: student.php');
       } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
       }
       
       $conn->close();
      }
   ?>    
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script>
        function getdetail(str){
          if(str.length ==0){
            document.getElementById("name").value = "";
            document.getElementById("dob").value = "";
            document.getElementById("gender").value = "";
            document.getElementById("email").value = "";
            document.getElementById("placed").value = "";
            return;
          }
          else{
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
              if(this.readyState==4 && this.status==200){
                var myObj= JSON.parse(this.responseText);
                document.getElementById("name").value=myObj[0];
                document.getElementById("dob").value=myObj[1];
                document.getElementById("gender").value=myObj[2];
                document.getElementById("email").value=myObj[3];
                document.getElementById("placed").value=myObj[4];
              }
            };
            xmlhttp.open("GET","search1.php?id="+str,true);
            xmlhttp.send();
          }
        }
      </script>
</body>
</html>