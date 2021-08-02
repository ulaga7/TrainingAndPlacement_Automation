<?php 
$host = "localhost";
$user = "root";
$password = '';
$db_name = "campus";

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
          <form class="form-inline my-2 my-lg-0" action="student.php" method="POST">
            <button class="btn btn-primary" type="submit" style="margin-left: -13rem;">Students List</button>
          </form>
          <form class="form-inline my-2 my-lg-0" action="login.php" method="POST">
            <button class="btn btn-primary" type="submit" style="margin-left: -55%;">Log-in</button>
          </form>
        </div>
      </nav>
      <br><br><br>
      <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Company Name</th>
            <th scope="col">Location</th>
            <th scope="col">Package</th>
            <th scope="col">Interview Date</th>
            <th scope="col">Skills Required</th>
            <th scope="col">CGPA Required</th>
            <th scope="col">Backlogs</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $sql = "SELECT * FROM details";
          $result = $con->query($sql);
    
            while($rows=$result->fetch_assoc())
            { ?>
          <tr>
            <th scope="row"><?php echo $rows['name'];?></th>
            <td><?php echo $rows['location'];?></td>
            <td><?php echo $rows['package'];?></td>
            <td><?php echo $rows['date'];?></td>
            <td><?php echo $rows['skills'];?></td>
            <td><?php echo $rows['mark'];?></td>
            <td><?php echo $rows['backlogs'];?></td>
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