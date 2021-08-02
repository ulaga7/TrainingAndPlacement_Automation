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
    <title>Student Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
          <form class="form-inline my-2 my-lg-0" action="login.php" method="POST">
            <button class="btn btn-primary" type="submit" style="margin-left: -55%;">Log-in</button>
          </form>
        </div>
      </nav>
      <br><br><br>
      <div class="row">
  <div class="col-2" style="padding-left: 3rem;">
      <h3>Filters:</h3>
      <h4>Gender:</h4>
      <input type="checkbox" class="common_selector gender" id="male" name="gender" value="male">
      <label for="male">Male</label><br>
      <input type="checkbox" class="common_selector gender" id="female" name="gender" value="female">
      <label for="female">Female</label><br>
      <h4>Placed:</h4>
      <input type="checkbox" class="common_selector placed" id="yes" name="placed" value="yes">
      <label for="yes">Yes</label><br>
      <input type="checkbox" class="common_selector placed" id="no" name="placed" value="no">
      <label for="no">No</label><br>
  </div>
  <span class="border-right"></span>
  <div class="col">
        <table class="table table-bordered" id="datatable">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Register Number</th>
              <th scope="col">Name</th>
              <th scope="col">Date of Birth</th>
              <th scope="col">Gender</th>
              <th scope="col">Email-id</th>
              <th scope="col">Placed</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql = "SELECT * FROM student";
              $result = $con->query($sql);
        
                while($rows=$result->fetch_assoc())
                { ?>
              <tr>
                <th scope="row"><?php echo $rows['id'];?></th>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['dob'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['placed'];?></td>
              </tr>
              <?php }
            ?>
            </tbody>
      </table>
  </div>
</div>
<br><br>
      <div class="btn-group btn-group-lg" role="group" aria-label="...">
        <form action="insstudent.php" method="POST">
          <button  class="btn btn-primary" type="submit" style="margin-left: 18rem;">INSERT</button>
        </form>
        <form action="updstudent.php" method="post">
          <button type="submit" class="btn btn-primary" style="margin-left: 18rem;">UPDATE</button>
        </form>
        <form action="delstuden.php" method="post">
          <button type="submit" class="btn btn-primary" style="margin-left: 18rem;">DELETE</button>
        </form>
      </div>
<script>
    $(document).ready(function(){
    filter_data();

function filter_data()
{
    var action = 'fetch_data';
    var gender = get_filter('gender');
    var placed = get_filter('placed');
    $.ajax({
        url:"fet.php",
        method:"POST",
        data:{action:action, gender:gender, placed:placed},
        success:function(data){
            $('#datatable').html(data);
        }
    });
}
function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });
});
</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>