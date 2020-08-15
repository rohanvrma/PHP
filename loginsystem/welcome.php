<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php require 'partials/_nav.php';
       

        if( !isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false )
        {
            header('Location:login.php');
            exit;   
        }

     ?> 
    <h4 style="text-align:center">Welcome <?php echo $_SESSION['username'] ?> </h4>
</body>
</html>