<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <!-- <link rel="stylesheet" href="style.css" type="text/css"> -->
  <link rel="icon" type="image/ico" href="bm.png">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    <style type="text/css">
      
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
}

body {
  background: #e6e6e6;
  font-family: 'Rubik', sans-serif;
/*  margin-top:200px ;*/
}

h1{
  text-align: center;
}

.login-form {
  background: #fff;
  width: 500px;
  margin: 65px auto;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  border-radius: 4px;
  box-shadow: 0 2px 25px rgba(0, 0, 0, 0.2);
}
.login-form h1 {
  padding: 35px 35px 0 35px;
  font-weight: 300;
}
.login-form .content {
  padding: 35px;
  text-align: center;
}
.login-form .input-field {
  padding: 12px 5px;
}
.login-form .input-field input {
  font-size: 16px;
  display: block;
  font-family: 'Rubik', sans-serif;
  width: 100%;
  padding: 10px 1px;
  border: 0;
  border-bottom: 1px solid #747474;
  outline: none;
  -webkit-transition: all .2s;
  transition: all .2s;
}
.login-form .input-field input::-webkit-input-placeholder {
  text-transform: uppercase;
}
.login-form .input-field input::-moz-placeholder {
  text-transform: uppercase;
}
.login-form .input-field input:-ms-input-placeholder {
  text-transform: uppercase;
}
.login-form .input-field input::-ms-input-placeholder {
  text-transform: uppercase;
}
.login-form .input-field input::placeholder {
  text-transform: uppercase;
}
.login-form .input-field input:focus {
  border-color: #222;
}
.login-form a.link {
  text-decoration: none;
  color: #747474;
  letter-spacing: 0.2px;
  text-transform: uppercase;
  display: inline-block;
  margin-top: 20px;
}
.login-form .action {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
}
.login-form .action button {
  width: 100%;
  border: none;
  padding: 18px;
  font-family: 'Rubik', sans-serif;
  cursor: pointer;
  text-transform: uppercase;
  background: #2c354f;
    color: white;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 0;
  letter-spacing: 0.2px;
  outline: 0;
  -webkit-transition: all .3s;
  transition: all .3s;
}
.login-form .action button:hover {
  background-color: black;
  ;
}
.login-form .action button:nth-child(2) {
  background: #2d3b55;
  color: #fff;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 4px;
}
.login-form .action button:nth-child(2):hover {
  background: #3c4d6d;

}

    </style>

</head>
<body>

  <nav class="navbar navbar-expand-lg bg-light navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="indexf.php">BMIIT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="indexf.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.phpphp">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><b>
            Student Corner</b>
          </a>
          <ul class="dropdown-menu">
         <!--    <li><a class="dropdown-item" aria-current="page" href="#">Bsc(IT)</a></li>
            <li><a class="dropdown-item" aria-current="page"href="#">Msc(IT)</a></li>
            <li><a class="dropdown-item" aria-current="page" href="#">Magazine</a></li>
            <li><a class="dropdown-item" aria-current="page" href="index1.php">SIS</a></li>
            <li><a class="dropdown-item" aria-current="page" href="#">NSS</a></li> -->
            <li><a class="dropdown-item" aria-current="page" href="reg.php">Registration</a></li>
            <li><a class="dropdown-item" aria-current="page" href="login.php">Login</a></li>
          </ul>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">placement</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
ob_start(); // Start output buffering

$enrollmentno = $_POST['enrollmentno'];
$password = $_POST['password'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'sis');
if ($conn->connect_error) {
    die('Connection is failed, please check the database: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("SELECT * FROM registration WHERE enrollmentno = ?");
    $stmt->bind_param("s", $enrollmentno);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password === $row['password']) {
            // Redirect to indexf.php
            header("Location: indexf.php");
            exit(); // Terminate the script after redirection
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Incorrect password!</strong> Try another password!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
        }
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                <strong>User not found!</strong> Register yourself then login!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }

    $stmt->close();
    $conn->close();
}

ob_end_flush(); // Flush the output buffer
?>




<div class="login-form">
  <form action="/practice/login.php" method="POST">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="tel" placeholder="Enrolment Number" name="enrollmentno" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" name="password" autocomplete="new-password">
      </div>
     <!-- <a href="#" class="link">Forgot Your Password?</a> -->
     <a href="reg.php" class="link">Register Yourself ! </a>
    </div>
    <div class="action">
      <button>Login</button>
    </div>
  </form>
</div>



</div>                         <!-- Footer -->

<!-- Remove the container if you want to extend the Footer to full width. -->
<!-- <div class="container my-5"> -->

  <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <!-- <div class="container p-10"> -->
    <!-- Section: Social media -->
    <section class="">
      <!-- Facebook -->
      <a class="btn btn-outline btn-floating m-1" href="https://www.facebook.com/mscitdcstutu?fref=ts" role="button"
        ><i class="fab fa-instagram"><img src="fb2.png" height="37"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline btn-floating m-1" href="https://twitter.com/mscitinbmiit?lang=en" role="button"
        ><i class="fab fa-instagram"><img src="tw.png" height="47"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline btn-floating m-1" href="https://www.google.com/search?client=opera-gx&q=bmiit&sourceid=opera&ie=UTF-8&oe=UTF-8" role="button"
        ><i class="fab fa-instagram"><img src="goo.png" height="55"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline btn-floating m-1" href="https://www.instagram.com/bmiit.utu/?hl=en" role="button"
        ><i class="fab fa-instagram"><img src="ins.png" height="30"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline btn-floating m-1" href="https://www.linkedin.com/in/bmiit-utu-090858185/?originalSubdomain=in" role="button"
        ><i class="fab fa-instagram"><img src="li.png" height="30"></i
      ></a>

    </section>
    <!-- Section: Social media -->
  <!-- </div> -->
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center py-2" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Design by Dev Solanki 
   
  </div>
  <!-- Copyright -->
</footer>
  
<!-- </div> -->
<!-- End of .container -->

</body>
</html>
  