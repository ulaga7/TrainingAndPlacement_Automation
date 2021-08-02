<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
 <?php
 $connection = mysqli_connect("localhost","root","","campus");
 if ($connection->connect_error) {
   die('Error : ('. $connection->connect_errno .') '. $connection->connect_error);
 }
 if(isset($_POST["action"]))
 {
   $query = " SELECT * FROM student WHERE status = '1'";
  if(isset($_POST["gender"]))
  {
   $brand_filter = implode("','", $_POST["gender"]);
   $query .= "AND gender IN ('".$brand_filter."')";
  }
   if(isset($_POST["placed"]))
  {
   $model_filter = implode("','", $_POST["placed"]);
   $query .= " AND placed IN('".$model_filter."')";
  }
  //echo "$query";
 $result=mysqli_query($connection,$query);
 $count=mysqli_num_rows($result);
 $output = '';
 if($count > 0)
 { 
     $output .= '
     <table class="table table-bordered">
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
   <tbody>';
  while($row= $result->fetch_assoc())
  {
 ?>
 <?php
    $output .=' 
    <tr> 
      <th scope="row">'.$row['id'].'</th>
  <td>'.$row['name'].'</td>
  <td>'.$row['dob'].'</td>
  <td>'.$row['gender'].'</td>
  <td>'.$row['email'].'</td>
  <td>'.$row['placed'].'</td>
  </tr>
      ';
    ?>
        
          <?php }
          $output .='
          </tbody>
          </table>';
 }
 else{
  $output .= '
  <table class="table table-bordered">
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
</table>';
 }
 echo $output; 
}

        ?>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>