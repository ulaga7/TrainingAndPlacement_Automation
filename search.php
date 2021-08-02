<?php
    
    $name=$_REQUEST['name'];
    $conn = mysqli_connect("localhost","root","","campus");
    if($name !==""){
        $query = mysqli_query($conn,"SELECT * FROM `details` WHERE name='$name'");
        $row=mysqli_fetch_array($query);
        $loc=$row["location"];
        $pac=$row["package"];
        $date=$row["date"];
        $ski=$row["skills"];
        $cgpa=$row["mark"];
        $back=$row["backlogs"];
    }
    $result=array("$loc","$pac","$date","$ski","$cgpa","$back");
    $myJSON =json_encode($result);
    echo $myJSON;
?>