<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Care Plus - Patient Registration</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'IBM Plex Sans', sans-serif;

 }
  </style>
  <script>
    function check() {
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('cpassword').value;
      const message = document.getElementById('message');

      if (password === confirmPassword) {
        message.style.color = '#5dd05d';
        message.innerText = 'Matched';
      } else {
        message.style.color = '#f55252';
        message.innerText = 'Password fields do not match';
      }
    }

    function alphaOnly(event) {
      const key = event.keyCode;
      return ((key >= 65 && key <= 90) || key == 8 || key == 32);
    }

    function checklen() {
      const pass = document.getElementById("password");
      if (pass.value.length < 6) {
        alert("Password must be at least 6 characters long.");
        return false;
      }
    }
  </script>
</head>
<body>
<nav class="navbar navbar-expand-lg  fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img  src="images/logo.png" alt="Care Plus Logo"> 
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
          <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="doctor.html">Doctors</a></li>
          <li class="nav-item"><a class="nav-link" href="departments.html">Departments</a></li>
          <li class="nav-item"><a class="nav-link" href="blog.html">Blogs</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="registration.php">Registration</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container mt-5 pt-5">
  <h3 class="register-heading">Register as Patient</h3>
  <div class="row justify-content-center">
    <div class="col-md-8 register p-4">
      <form method="post" action="func2.php" class="register-form">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" class="form-control" placeholder="First Name *" name="fname" onkeydown="return alphaOnly(event);" required>
          </div>
          <div class="form-group col-md-6">
            <input type="text" class="form-control" placeholder="Last Name *" name="lname" onkeydown="return alphaOnly(event);" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="email" class="form-control" placeholder="Your Email *" name="email" required>
          </div>
          <div class="form-group col-md-6">
            <input type="tel" class="form-control" minlength="10" maxlength="10" placeholder="Contact *" name="contact" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="password" class="form-control" placeholder="Password *" id="password" name="password" onkeyup="check()" required>
          </div>
          <div class="form-group col-md-6">
            <input type="password" class="form-control" placeholder="Confirm Password *" id="cpassword" name="cpassword" onkeyup="check()" required>
            <span id="message"></span>
          </div>
        </div>

        <div class="form-group d-flex align-items-center">
          <label class="radio-inline mr-3">
            <input type="radio" name="gender" value="Male" checked> Male
          </label>
          <label class="radio-inline">
            <input type="radio" name="gender" value="Female"> Female
          </label>
        </div>

        <div class="form-group text-center">
          <a href="index.php">Already have an account? Login Now</a>
        </div>

        <div class="form-group text-center">
          <button type="submit" class="btn btn-primary btn-block btn-lg" name="patsub1" onclick="return checklen();">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
