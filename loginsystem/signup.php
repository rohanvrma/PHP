<?php include 'partials/db.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    
</head>
<body class="bg-warning">
    <?php require 'partials/_nav.php' ?>
    <?php
    if(isset($_POST['username']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $exists = "SELECT * FROM users123 WHERE username = '$username'";
        $exists_result = $connect-> query($exists);
        $exists_err = false;
        $pswd_err = false;
        $success = false;
        if( $exists_result -> num_rows > 0 )
        {
            $exists_err = true;
        }
        else
        {
        if(  $password == $cpassword )
        {
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $qry = "INSERT INTO users123 (id,username,password,date) VALUES (NULL,'$username', '$hash',CURRENT_TIMESTAMP)";
            if($connect->query($qry)){
                $success = true;
               
            }
        }
        else{
            $pswd_err = true;            
        }
    }

    if( $exists_err == true )
    {
        echo '<div class="alert alert-danger">
                <strong>Error!</strong> Username already exists.
              </div>';
    }
    elseif( $pswd_err == true )
    {
        echo '<div class="alert alert-danger">
                <strong>Error!</strong> Passwords Donot match.
              </div>';
    }
    elseif( $success == true )
    {
        echo '<div class="alert alert-success">
                <strong>Success!</strong>Account successfully created.
              </div>';
    }

    }
    
    
    ?>
    
    <div class="row">
        <div class="col-md-4 bg-light mt-3 p-4 mx-auto">
            <h3 class="text-center">SignUp to our Website</h3>
            <hr/>
            <form action="signup.php" method="post">
                    
                    <input type="text" class="form-control mt-3" placeholder="Enter Username" name="username">
                    <input type="password" class="form-control mt-3" placeholder="Enter password"  name="password">
                    <input type="password" class="form-control mt-3" placeholder="Confirm password"  name="cpassword">
            

                <button type="submit" class="btn btn-success mt-3">Submit</button>
            </form>
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
</body>
</html>