<!DOCTYPE html>
<html lang="en">
<head>
  <title>Care Plus</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
  <link rel="stylesheet" href="style1.css">
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">

  
  <script>
    function alphaOnly(event) {
      var key = event.keyCode;
      return ((key >= 65 && key <= 90) || key == 8 || key == 32);
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

  <br>
  <div class="container register" style="font-family: 'IBM Plex Sans', sans-serif;">
    <div class="row">
      <div class="col-md-9 register-right" style="margin-top: 40px; left: 80px;">
        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 40%;">
          <li class="nav-item"><a class="nav-link active" id="patient-tab" data-toggle="tab" href="#patient" role="tab" aria-controls="patient" aria-selected="true">Patient</a></li>
          <li class="nav-item"><a class="nav-link" id="doctor-tab" data-toggle="tab" href="#doctor" role="tab" aria-controls="doctor" aria-selected="false">Doctor</a></li>
          <li class="nav-item"><a class="nav-link" id="admin-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Admin</a></li>
        </ul>

        <div class="tab-content" id="myTabContent">
          <!-- Patient Login Form -->
          <div class="tab-pane fade show active" id="patient" role="tabpanel" aria-labelledby="patient-tab">
            <h3 class="register-heading">Login as Patient</h3>
            <form method="POST" action="func.php">
              <div class="row register-form">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email *" name="email" required/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password *" name="password2" required/>
                  </div>
                  <div class="form-group">
                    <a href="registration.php">If you do not have an account, Sign Up Now</a>
                  </div>
                  <div class="form-group">
                  <button type="submit" class="btnlogin btn btn-primary" name="patsub">Login</button>
                </div>
                </div>
              </div>
            </form>
          </div>

          <!-- Doctor Login Form -->
          <div class="tab-pane fade" id="doctor" role="tabpanel" aria-labelledby="doctor-tab">
            <h3 class="register-heading">Login as Doctor</h3>
            <form method="POST" action="func1.php">
              <div class="row register-form">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="User Name *" name="username3" onkeydown="return alphaOnly(event);" required/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password *" name="password3" required/>
                  </div>
                  <div class="form-group">
                  <button type="submit" class="btnlogin btn btn-primary" name="docsub1">Login</button>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <!-- Admin Login Form -->
          <div class="tab-pane fade" id="admin" role="tabpanel" aria-labelledby="admin-tab">
            <h3 class="register-heading">Login as Admin</h3>
            <form method="POST" action="func3.php">
              <div class="row register-form">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="User Name *" name="username1" onkeydown="return alphaOnly(event);" required/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password *" name="password2" required/>
                  </div>
                  <div class="form-group">
                  <button type="submit" class="btnlogin btn btn-primary" name="adsub">Login</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
