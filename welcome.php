<?php 
$host = "localhost";
$user = "root";
$password = '';
$db_name = "tnp_auto";

$con = mysqli_connect($host, $user, $password, $db_name);
if(mysqli_connect_errno()) {
    die("Failed to connect with MySQL: ". mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training and Placement</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="#">
            <img src="PEC_logo.png" alt="logo" style="width:40px;">
          </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <label for="" style="color:white";>Eligibility Calculator</label>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" action="student.php" method="POST">
            <button class="btn btn-primary" type="submit" style="margin-left: -13rem;">Students List</button>
          </form>
          <form class="form-inline my-2 my-lg-0" action="login.php" method="POST">
            <button class="btn btn-primary" type="submit" style="margin-left: -55%;">Log-in</button>
          </form>
        </div>
      </nav>
      <br><br><br>
      <div class="filter-box">
      <form action="">
      <div class="form-group">
    <label for="10thPercentage">10th Percentage</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <label for="10thPercentage">12th Percentage</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <label for="10thPercentage">CGPA PERCENTAGE</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <label for="10thPercentage">Backlogs</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <label for="10thPercentage">History of Arrears</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

  </div>

  <button type="submit" class="btn btn-primary">Submit</button> 
      </form>
      </div>
      
      <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Register Number</th>
            <th scope="col">Full name</th>
            <th scope="col">Department</th>
            <th scope="col">10th Percentage</th>
            <th scope="col">12th Percentage</th>
            <th scope="col">Diploma Percentage</th>
            <th scope="col">UG Percentage</th>

          </tr>
        </thead>
        <tbody>
        <?php
          $sql = "SELECT reg_number , full_name , department , sslc_percentage , hsc_percentage , diploma_percentage , ug_percentage FROM b_tech_master_db";
          $result = $con->query($sql);
    
            while($rows=$result->fetch_assoc())
            { ?>
          <tr>
            <td><?php echo $rows['reg_number'];?></td>
            <td><?php echo $rows['full_name'];?></td>
            <td><?php echo $rows['department'];?></td>
            <td><?php echo $rows['sslc_percentage'];?></td>
            <td><?php echo $rows['hsc_percentage'];?></td>
            <td><?php echo $rows['diploma_percentage'];?></td>
            <td><?php echo $rows['ug_percentage'];?></td>
          </tr>
          <?php }
        ?>
        </tbody>
      </table>
      <br><br>
      <div class="btn-group btn-group-lg" role="group" aria-label="...">
        <form action="insert.php" method="POST">
          <button  class="btn btn-primary" type="submit" style="margin-left: 18rem;">INSERT</button>
        </form>
        <form action="update.php" method="post">
          <button type="submit" class="btn btn-primary" style="margin-left: 18rem;">UPDATE</button>
        </form>
        <form action="delete.php" method="post">
          <button type="submit" class="btn btn-primary" style="margin-left: 18rem;">DELETE</button>
        </form>
      </div>
</body>
</html>