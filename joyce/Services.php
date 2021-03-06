<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <style>
    .box{
    border-radius:20px;
    box-shadow: 1px 1px solid grey; /*Read More box*/
    }
    .box:hover{
    background-color: black;
    color:white;
    }
    .backg{
    height:auto;
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('5.jpg');
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
    .box1{
    border-radius:20px;
    box-shadow: 0px 0px 7px gray;
    margin-left: 70px;
   height: auto;
    }
    </style>
</head>
<body>
        <div class="container-fluid ">
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
                        <h4 style="color:sienna;font-weight:bold;margin-top:100px">Services</h4>
                        <p style="color: white;font-size:80px;font-weight:bold">What I Do</p>
                        </div>
                </div>
                <div class="row py-5">
                        <div class="col-md-4 mt-5 box1">
                                <img src="joyce1.png" alt="no image"/>
                            </div>
                        <div class="col-md-6 text-left mt-5 ml-5">
                            <h1 style="font-weight: bold">Accounting Services</h1>
                            <h4 style="color:orangered;font-weight:bold">Outsourced Accounting</h4>
                            <p style="color: gray">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation.  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                            <h4 style="color:orangered;font-weight:bold">Compilations</h4>
                            <p style="color:gray">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation.  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                            <a href="Services.html"><button class="btn btn-light box mt-5">KNOW MORE</button></a>
                        </div>
                </div>
                <div class="row py-5 " style="box-shadow:0px 0px 10px gray">
                        <div class="col-md-6 text-left mt-5 ml-5">
                            <h1 style="font-weight: bold">Tax Services</h1>
                            <h4 style="color:orangered;font-weight:bold">Individual Tax Services</h4>
                            <p style="color:gray">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation.  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                            <h4 style="color:orangered;font-weight:bold">Corporate & Partnership Tax Services</h4>
                            <p style="color: gray">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation.  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                            <h4 style="color:orangered;font-weight:bold">Estate & Trust Tax Services</h4>
                            <p style="color: gray">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation.  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                            <a href="Services.html"><button class="btn btn-light box mt-5">KNOW MORE</button></a>
                        </div>
                        <div class="col-md-4 mt-5 ml-5 box1">
                                <img src="joyce2.png" alt="no image"/>
                            </div>
                </div>
                <div class="row py-5 ">
                        <div class="col-md-4 mt-5 box1">
                                <img src="joyce3.png" alt="no image"/>
                            </div>
                        <div class="col-md-6 text-left mt-5 ml-5">
                            <h1 style="font-weight: bold">Financial Advisory</h1>
                            <h4 style="color:orangered;font-weight:bold">Mergers & Acquistions</h4>
                            <p style="color: gray">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation.  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                            <h4 style="color:orangered;font-weight:bold">Financial Crisis</h4>
                            <p style="color:gray">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation.  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                            <a href="Services.html"><button class="btn btn-light box mt-5">KNOW MORE</button></a>
                        </div>
                </div>
                <div class="row bg-dark p-5 mt-5">
                        <div class="col-md-8 ml-5">
                            <h4 style="margin-top: 50px;color: peru;font-weight: bold ">Free Estimation</h4>
                            <h1 style="color:white;font-weight: bold ">Request A Quote</h1>
                            <p style="color:white; text-align:left">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
                        </div>
                        <div class="col-md-3 mt-5 text-center py-5">
                        <a href="http://localhost/php/joyce//Home.php"> <button class="btn btn-light" style="border-radius:20px; padding:10px;">GET A QUOTE</button></a>
                        </div>
                    </div>
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