<?php
    
    $name=$_REQUEST['id'];
    $conn = mysqli_connect("localhost","root","","campus");
    if($name !==""){
        $query = mysqli_query($conn,"SELECT * FROM `student` WHERE id='$name'");
        $row=mysqli_fetch_array($query);
        $loc=$row["name"];
        $pac=$row["dob"];
        $date=$row["gender"];
        $ski=$row["email"];
        $cgpa=$row["placed"];
    }
    $result=array("$loc","$pac","$date","$ski","$cgpa");
    $myJSON =json_encode($result);
    echo $myJSON;
?>