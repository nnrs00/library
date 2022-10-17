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

    </div>
  </div>
</nav>

<main class="container">
  <div class="bg-light p-3 rounded">
    <div class="row">

      <center>

        <h1>Student Account <i style="color: white;" class="bi bi-eye"></i></h1>

        <form class="user-form" action="sign_in-student-code.php" method="POST">

           <div class="inputField">
            <input  oninput="this.value = this.value.toUpperCase()" type="text" placeholder=" " name="username" autocomplete="on" required />
            <span>Username</span>
          </div>

          <div class="inputField">
            <input  oninput="this.value = this.value.toUpperCase()" type="password" placeholder=" " name="password" autocomplete="on" required />
            <span>Password</span>
          </div>

          <div class="inputBtn">
            <input type="submit" name="submit" value="Log in" class="submit-btn">
          </div>

         
        </form>
      </div>
   
  </center>
</div>
    
    <!-- <a class="btn btn-g btn-primary" href="../components/navbar/" role="button">MY QR CODE &raquo;</a> -->
  </div>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
