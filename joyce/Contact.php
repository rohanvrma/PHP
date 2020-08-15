<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <style>
    .backg{
    height:auto;
    background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('3.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    }
    .nav-link{
    color:white;
    padding:0px;
    }
    .nav-link:hover{
    color: orangered;
    text-decoration: none;
    }
    .nav-link:active{
    color : orangered;
    }
    .box3{
    height:auto;
    background:white;
    border-radius:10px;
    box-sizing: border-box;
    padding:10px;
    box-shadow: 0px 0px 10px grey;
    }
    ul li{
    display: inline-block;
    }
    ul li a{
    color: black;
    text-decoration: none;
    margin:10px;
    }
    ul li a:hover{
    color:orangered;
    text-decoration: none;
    }
    .round{
        height:25px;
        width:25px;
        border-radius:50%;
       
    }
    </style>
</head>
<body>
<div class="container-fluid">
<div class="row backg">
        
        <div class="col-md-12">
            <nav class="navbar navbar-expand-sm">
                <img src="logo.png" alt="No image"/>
                <button type="button" data-toggle="collapse" class="navbar-toggler" data-target="#myid"><span class="navbar-toggler-icon" style="background-color:orangered;color:white" >&Congruent;</span>
                </button>
                 <div id="myid" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-nav-item ">
                        <a href="http://localhost/php/joyce//Home.php" class="nav-link mr-3">Home</a>
                    </li>
                    <li class="navbar-nav-item">
                    <a href="http://localhost/php/joyce//About.php" class="nav-link mr-3 ">About</a>
                    </li>
                    <li class="navbar-nav-item">
                    <a href="http://localhost/php/joyce//Services.php" class="nav-link mr-3">Services</a>
                    </li>
                    <li class="navbar-nav-item">
                   <a href="http://localhost/php/joyce//whychoose.php" class="nav-link mr-3">Why choose me</a>
                    </li>
                    <li class="navbar-nav-item">
                    <a href="http://localhost/php/joyce//Testimonials.php" class="nav-link mr-3">Testimonals</a>
                    </li>
                    <li class="navbar-nav-item">
                    <a href="http://localhost/php/joyce//Contact.php" class="nav-link mr-3">Contact</a>
                    </li>
                    <a href="http://localhost/php/joyce//Home.php"><button class="btn mr-3" style="background-color: orangered;color : white;border-radius: 20px;" >GET A QUOTE</button></a>
                </ul>
            </div>
            
            </nav>
        
    </div>
                            <div class="col-md-12 ml-5">
                            <h4 style="color:sienna;font-weight:bold;margin-top:100px">Get In Touch</h4>
                            <p style="color: white;font-size:80px;font-weight:bold">Contact</p>
                            </div>
                            
                </div>
                            <div class="row py-5">
                                <div class="col-md-6 ml-5">
                                        <h6 style="color:orangered; font-weight: bold">Get In Touch</h6>
                                        <h2 style="color: black;font-weight:bold">Contact Details</h2>
                                        <div class="row py-5">
                                        <div class="col-md-6">
                                        <p style="color: black;font-weight:bold;font-size:larger;"><i class="fa fa-phone-alt round bg-light" style="margin-right: 10px"></i>Phone Numbers</p>
                                        <p style="margin-left: 30px"> +1 910-626-85255 </br> +1 920-838-85366</p>
                                        </div>
                                        <div class="col-md-6">
                                        <p style="font-weight: bold;font-size:large;"><i class="fa fa-envelope-open round bg-light"  style="margin-right: 10px"></i >Email</p>
                                                    <p style="margin-left: 30px">contact@example.com</p>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <p style="font-weight:bold;font-size:larger;"><i class="fa fa-map-marker-alt round bg-light"  style="margin-right: 10px"></i>Address​ </p>
                                            <p style="margin-left: 30px">123 Fifth Avenue, New York, </br> NY 10160, USA</p>
                                        </div>
                                        </div>
                                            <div class="row py-5">
                                                    <div class="col-md-6">
                                                            <p style="font-weight:bold;font-size:larger;">Follow Us</p>
                                                            <i class="fab fa-facebook round bg-light" style="font-size:x-large; margin-left: 10px"></i>
                                                            <i class="fab fa-twitter round bg-light" style="font-size:x-large; margin-left: 10px"></i>
                                                            <i class="fab fa-linkedin round bg-light" style="font-size:x-large; margin-left: 10px"></i>
                                                            <i class="fab fa-whatsapp-square round bg-light" style="font-size:x-large; margin-left: 10px"></i>
                
                                                    </div>
                                                </div>
                                </div>
                                      <div class="col-md-4 mt-4 mx-4" >
                                        <div class="box3">
                                        <h4 style="color: orangered;">Free Estimation</h4>
                                        <h1 style="font-weight: bold">Request A Quote</h1>
                                        <form action="" method="post">
                                        <input type="text" name="name" placeholder="Name*" class="form-control mt-3" required/>
                                        <input type="email" name="email" placeholder="Email*" class="form-control mt-3" />
                                        <input type="number" name="mobile" placeholder="Phone Number*" class="form-control mt-3" />
                                        <input type="text" name="no_of_employees"placeholder="Number of Employees*" class="form-control mt-3" />
                                        <input type="text" name="no_of_incoming_invoices"placeholder="Number of Incoming Invoices*" class="form-control mt-3" />
                                        <input type="text" name="no_of_outgoing_invoices"placeholder="Number of Outgoing Invoices*" class="form-control mt-3" />
                                        <button type="submit" class="btn mt-3" style="background-color: orangered;color : white;border-radius: 20px;">GET A QUOTE</button>
                                    </form>
                                    <?php
                                    $connect = new mysqli('localhost','root','','php1');
                                    if(isset($_POST['name'])){
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $mobile = $_POST['mobile'];
                                    $no_of_employees = $_POST['no_of_employees'];
                                    $no_of_incoming_invoices = $_POST['no_of_incoming_invoices'];
                                    $no_of_outgoing_invoices = $_POST['no_of_outgoing_invoices'];
   
    
    $qry = "INSERT INTO joyce (name,email,mobile,no_of_employees,no_of_incoming_invoices,no_of_outgoing_invoices) VALUES 
    ('$name','$email','$mobile','$no_of_employees','$no_of_incoming_invoices','$no_of_outgoing_invoice   s')";
    if($connect->query($qry)){
        echo "Success";
    }
    else{
        echo "Error".$connect->error;
    }
    }
                                    ?>
                                    
                                        </div>
                                    </div>
                                </div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.5333263822303!2d-0.1203905800401081!3d51.50343083343487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2sCoca-Cola+London+Eye!5e0!3m2!1sen!2sin!4v1562733016273!5m2!1sen!2sin" width="1500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    <div class="row mt-5">
                <div class="col-md-6">
                   Copyright &copy 2019 Accountant | Powered by Accountant</div>
                   <div class="col-md-6">
                    <ul style="float: right">
                        <li>
                            <a href="http://localhost/php/joyce//Home.php" >Home</a>
                        </li>
                        <li >
                        <a href="http://localhost/php/joyce//About.php" >About</a>
                        </li>
                        <li >
                        <a href="http://localhost/php/joyce//Services.php" >Services</a>
                        </li>
                        <li >
                       <a href="http://localhost/php/joyce//whychoose.php" >Why choose me</a>
                        </li>
                        <li >
                        <a href="http://localhost/php/joyce//Testimonials.php" >Testimonals</a>
                        </li>
                        <li >
                        <a href="http://localhost/php/joyce//Contact.php" >Contact</a>
                        </li> 
                    </ul>
                </div>
            </div>
                            
                            </div>

</body>
</html>