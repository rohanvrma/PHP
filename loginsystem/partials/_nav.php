<?php
session_start();
if( isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true )
{
$loggedin = true;     
}
else{
  $loggedin = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSecure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
      .modal-header, .close {
        background-color: #5cb85c;
        color:white !important;
        text: center;
        font-size: 30px;
      }
      .modal-footer {
        background-color: #f9f9f9;
      }
      </style>
</head>
<body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="login.php">MyWebsite</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="welcome.php">HOME</a>
            </li>
            <?php
            if($loggedin == true ) {
              echo '
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
            ';
            }
            else
            {
            echo '
            <li><a class="nav-link" href="signup.php">Sign Up</a></li>
            <li><a class="nav-link" href="#" data-target="#myModal" data-toggle="modal">Login</a></li> 
            ' ;
            }   
            ?>
            </ul>
        </div>
        </nav>



  <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
    <div class="modal-content">
          <div class="modal-header" style="padding:35px 50px;">
            
            <h4 class="modal-title">Login</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body" style="padding:40px 50px;">
            <form action="login.php" method="post">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter username">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
              </div>
              
                <button type="submit" class="btn btn-success btn-block">Login</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <p>Don't have an account?<a href="signup.php">Sign Up</a></p> 
          </div>
        </div>
      </div>
    </div> 


</body>