<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
      <br><br><br>
     <h1 style=" padding-left:2%;">ADMIN Log-In</h1>
     <br><br>
      <form style="padding-right: 72%;padding-left: 2%;" action="" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary" onclick="val()">Submit</button>
</form>

</body>
<script>
    function val(){
        var username = document.getElementById("email").value;
        var password = document.getElementById("pass").value;
        if ( username == "admin" && password == "admin123"){
            //alert ("Login successfully");
            //window.location = "success.html"; // Redirecting to other page.
            //return false;
        }
        else{
             <?php //echo "Invalid Username/Password" ?>
             alert("Invalid");
        }
    }
</script>
</html>