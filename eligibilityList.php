<?php 
include('connection.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $sslc = $_POST['sslc'];
    $hsc = $_POST['hsc'];
    $cgpa = $_POST['cgpa'];
    $backlogs = $_POST['backlogs'];
    $hoa = $_POST['hoa'];
    $arr = ($_POST['department']); 
    $arr1 = implode("', '", $arr);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Eligibility Calculator</title>
</head>
<body>
<table class="table table-bordered px-5 mt-4">
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
          $sql = "SELECT reg_number , full_name , department , sslc_percentage , hsc_percentage , diploma_percentage , ug_percentage 
          FROM b_tech_master_db 
          where sslc_percentage>=$sslc and 
          (diploma_percentage >= $hsc or hsc_percentage >= $hsc ) 
          and backlogs <=$backlogs and history_of_arrears <=$hoa  and 
          ug_percentage>=$cgpa and department  in ('$arr1')";

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
</body>
</html>