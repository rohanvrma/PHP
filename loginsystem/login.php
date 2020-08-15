<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body class="bg-warning">
    <?php require 'partials/_nav.php' ;
    
    ?>
    <?php
    if(isset($_POST['username']))
    {
        include 'partials/db.php';
        $username = $_POST['username'];
        $password = $_POST['password'];

        $qry = "SELECT * FROM users123 WHERE username = '$username' ";

        $result = $connect->query($qry);
        if( $result->num_rows > 0 )
        {
            while( $row = $result->fetch_assoc() )
            {
            if(password_verify($password,$row['password']))
            {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header('Location:welcome.php');
            }
            else{
                echo '<div class="alert alert-danger">
                <strong>Error!</strong> Invalid Password
              </div>';;
            }    
        }
        }
        else{
            echo "Invalid Username";
        }

    }
    ?>
    
    <div class="row">
        <div class="col-md-4 bg-light p-4 mt-3 mx-auto">
            <h3 class="text-center">Login to our Website</h3>
            <hr/>
            <form action="login.php" method="post">
                
                    <input type="text" class="form-control mt-3" placeholder="Enter Username" name="username">
                            
                    <input type="password" class="form-control mt-3" placeholder="Enter password"  name="password">

                <button type="submit" class="btn btn-success mt-3">Submit</button>
            </form>
            <p>Don't have an account? <a href="signup.php">Signup</a></p>
        </div>
    </div>


</body>
</html>