
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training and Placement</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/company.css">
    <link rel="stylesheet" href="./styles/eligib.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img style="margin-left: 3rem;" src="Images/TNP_Logo.png" width="40px" height="40px" alt="">
    <a class="navbar-brand ml-3 " id="hideonmobile1" href="#">Eligibility Calculator</a>
  </nav>
<!-- Navbar End -->

<div class="container ">
  <div class="instruction-box">
    <p class="text-center text-danger fw-bold">1.Do not put % symbol , just enter the number</p>
    <p class="text-center text-danger fw-bold">2.If there should be no backlogs enter 0</p>
    <p class="text-center text-danger fw-bold">3.If there should be no history of arrears enter 0</p>
  </div>
  
<form class="eligib-cal" action="eligibilityList.php" method="POST" >
  <label>
    <input name="sslc" class="form-control" type="text" placeholder="10th Percentage">
  </label>
  
  <label>
    <input  name="hsc" class="form-control" type="text" placeholder="12th Percentage" >
  </label>

  <label>
    <input  name="cgpa" class="form-control" type="text" placeholder="CGPA Percentage" >
  </label>

  
  <label>
    <input name="backlogs" class="form-control" type="text" placeholder="Backlogs" >
  </label>

  <label>
    <input name="hoa" class="form-control" type="text" placeholder="History Of Arrears" >
  </label>

<div class="checkbox-group">
  <div class="form-check">
    <input class="form-check-input" name="department[]"  type="checkbox" value="Computer Science and Engineering" id="flexCheckChecked" checked>
    <label class="form-check-label" for="flexCheckChecked">
      CSE
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" name="department[]"  type="checkbox" value="Information Technology" id="flexCheckChecked" checked>
    <label class="form-check-label" for="flexCheckChecked">
      IT
    </label>
  </div>


  <div class="form-check">
    <input class="form-check-input" name="department[]" type="checkbox" value="Electrical and Electronics Engineering" id="flexCheckChecked" checked>
    <label class="form-check-label" for="flexCheckChecked">
      EEE
    </label>
  </div>


  
  <div class="form-check">
    <input class="form-check-input" name="department[]" type="checkbox" value="Electronics and Communication Engineering" id="flexCheckChecked" checked>
    <label class="form-check-label" for="flexCheckChecked">
      ECE
    </label>
  </div>


  
  <div class="form-check">
    <input class="form-check-input" name="department[]" type="checkbox" value="Electronics and Instrumentation Engineeri" id="flexCheckChecked" checked>
    <label class="form-check-label" for="flexCheckChecked">
      EIE
    </label>
  </div>

    
  
  <div class="form-check">
    <input class="form-check-input" name="department[]" type="checkbox" value="Mechanical Engineering" id="flexCheckChecked" checked>
    <label class="form-check-label" for="flexCheckChecked">
      MECH
    </label>
  </div>


  
  <div class="form-check">
    <input class="form-check-input" name="department[]" type="checkbox" value="CIVIL ENGINEERING" id="flexCheckChecked" checked>
    <label class="form-check-label" for="flexCheckChecked">
      CIVIL
    </label>
  </div>

  
  <div class="form-check">
    <input class="form-check-input" name="department[]" type="checkbox" value="Chemical Engineering" id="flexCheckChecked" checked>
    <label class="form-check-label" for="flexCheckChecked">
      CHEMICAL
    </label>
  </div>

  


</div>


 
  <button onclick="validate()"  style="width: 10%; margin-top:20px" type="submit" class="btn btn-outline btn-info">Calculate</button>
</form>
</div>

      
     
   
     
</body>

<script>
  function validate()
  {
    //Do javaScript Validation Here
  
  }
</script>

</html>