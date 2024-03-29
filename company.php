<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="styles/company.css">
</head>
<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img style="margin-left: 3rem;" src="Images/TNP_Logo.png" width="40px" height="40px" alt="">
        <a class="navbar-brand ml-3 " id="hideonmobile1" href="#">Training and Placement Center</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto mx-5 px-5">
            <li class="nav-item active">
              <a class="nav-link" href="#">Companies <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Placed Students</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Your Profile</a>
            </li>
          </ul>
        </div>
      </nav>
    <!-- Navbar End -->

    <div class="container-fluid">
        <div class="header d-flex flex-column align-items-center mt-4">
            <h1 style="color: #BC76FF;">Companies Arrived</h1>
            <p class="font-italic"> " Dont wait untill it's too late , you might not get another chance " </p>
        </div>
        <!-- Company Cards -->
        <div class="container-cards d-flex flex-row justify-content-center  ">

            <div class="card">
                <div class="company-logo">
                    <img src="Images/DELOITTE LOGO.png" alt="">
                    <div class="company-content ">
                        <h4 class="font-weight-bold text-center my-2 mx-2" >Deloitte</h4>
                        <p style="margin-bottom: 2px;"   class="font-weight-bold mt-4 mx-3 "> Package : <span class="font-weight-light"> 6.3 LPA </span> </p>
                        <p  class="font-weight-bold mx-3"> Last date to Register : <span class="font-weight-light"> 25-7-2021 </span> </p>
                        <button class="register-button">Register</button>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="company-logo">
                    <img src="Images/TCS LOGO.png" alt="">
                    <div class="company-content ">
                        <h4 class="font-weight-bold text-center my-2 mx-2" >TCS Digital</h4>
                        <p style="margin-bottom: 2px;"   class="font-weight-bold mt-4 mx-3 "> Package : <span class="font-weight-light"> 7.5 LPA </span> </p>
                        <p  class="font-weight-bold mx-3"> Last date to Register : <span class="font-weight-light"> 25-7-2021 </span> </p>
                        <button class="register-button">Register</button>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="company-logo">
                    <img src="Images/HCL LOGO.png" alt="">
                    <div class="company-content ">
                        <h4 class="font-weight-bold text-center my-2 mx-2" >HCL</h4>
                        <p style="margin-bottom: 2px;"   class="font-weight-bold mt-4 mx-3 "> Package : <span class="font-weight-light"> 3.5 LPA </span> </p>
                        <p  class="font-weight-bold mx-3"> Last date to Register : <span class="font-weight-light"> 25-7-2021 </span> </p>
                        <button class="register-button">Register</button>
                    </div>
                </div>
            </div>


            
        </div>
      </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>