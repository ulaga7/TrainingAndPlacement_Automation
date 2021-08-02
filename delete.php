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
    <title>Delete</title>
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
    <select class="form-control" style="width: 41%;" name="name">
        <option></option>
        <?php
        $sql=$conn->query("SELECT name FROM details");
        while ($row = $sql->fetch_assoc()){
        ?>
        <option><?php echo $row['name']; ?></option>
        <?php
}
?>
    </select>
    </div>
  </div>
  <br><br>
  <button  class="btn btn-primary" name="del" type="submit" style="margin-left: 18rem;">SUBMIT</button>
      </form>
<?php
   if(isset($_POST['del'])){
    $name = $_POST['name'];
    $sql = "delete from details WHERE name='$name'";   
      if ($conn->query($sql) === TRUE) {
      header('location: welcome.php');
     } 
     else 
     {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }
   }
?>
</body>
</html>