<?php 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Student's Attendance Monitoring System</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixed/">
    <link href="style.css" rel="stylesheet">

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SAMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
       <!--  <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li> -->
         <li class="nav-item">
          <a class="nav-link "  href="logs.php">Logs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Reset Password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sign_in-student.php">Log Out</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

<main class="container">
  <div class="bg-light p-5 rounded text-center">
    
    <?php 
      
    ?>
    <form action="resetPassword-code.php" method="POST">
        <div class="inputField">
            <input  oninput="this.value = this.value.toUpperCase()" type="password" placeholder=" " name="oldpassword" autocomplete="on" required />
            <span style="margin-left:150px">Old Password</span>
          </div>
        <div class="inputField">
            <input  oninput="this.value = this.value.toUpperCase()" type="password" placeholder=" " name="npassword" autocomplete="on" required />
            <span style="margin-left:150px">New Password</span>
          </div>
          <div class="inputField">
            <input  oninput="this.value = this.value.toUpperCase()" type="password" placeholder=" " name="cnpassword" autocomplete="on" required />
            <span style="margin-left:150px">Confirm New Password</span>
          </div>
        </form>
    
    <a class="btn btn-lg btn-primary" href="QR.php" role="button">Reset Password </a>
  </div>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
