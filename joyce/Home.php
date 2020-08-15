<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home-Accoutant</title>
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
    /*why choose me box*/ 
    .box1{
    width:90%;
    height:auto;
    float: left;
    margin:20px;
    box-shadow: 0px 0px 5px gray;
    border-radius: 10px;
    padding: 20px;
    }
    .box1:hover{
    box-shadow: 0px 0px 15px gray;
    }
    /*testimonial box*/
    .box2{
    width:90%;
    height:auto;
    background-color: white;
    float: left;
    margin:20px;
    box-shadow: 0px 0px 10px gray;
    border-radius:10px;
    padding:20px;
    }
    /*form */
    .box3{
    height:auto;
    background:white;
    border-radius:10px;
    box-sizing: border-box;
    padding:10px;
    margin:20px;
    }
    .backg{
    height:auto;
    background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('nature.jpg');
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
    
    </style>
</head>
<body>
    <div class="container-fluid ">
        <div class="row backg ">
        
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
        <div class="row ml-5">
            <div class="col-md-8 mt-5">
                <h4 style="color:orangered; margin-top: 50px;">Accounting & Tax Services</h4>
                <p style="color:white ; font-weight:bold; font-size:80px;">Joyce Roberts</p>
                <hr style="width:10% ; color: orangered"/>
                <p style="color:white;font-size:25px;">Invest our time and effortson running your buisness.</br>Leave the accounting to me.
                </p>
                <a href="http://localhost/php/joyce//Home.php">
                <button class="btn btn-light" style="border-radius: 20px" id="#buton">GET A FREE QUOTE</button></a>
            </div>
            <div class="col-md-4 mt-5 ml-auto px-5 ">
                <img src="joyce.png" alt="No image" style="height:500px">
            </div>
        </div>
        </div>
        <div class="row py-5">
        <div class="col-md-12 text-center  ">
            <h5 style="color:tomato">Services</h5>
            <p style="font-weight: bold;font-size:30px;">What I Do</p></div>
            <div class="col-md-6 mt-5">
                <img src="joyce1.png" alt="no image"/>
            </div>
            <div class="col-md-6 mt-5">
                <h1 style="color:gray">#1</h1>
                <p style="font-weight: bold;font-size:30px;">Accounting Services</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur temporibus ut vero nostrum sit, veritatis asperiores, eveniet atque eligendi numquam modi voluptatibus esse odio dolorem praesentium quis repellendus distinctio quo.</p>
                <a href="http://localhost/php/joyce//Home.php"><button class="btn btn-light box mt-5">READ MORE</button></a>
            </div>
            <div class="col-md-6 mt-5">
                    <h1 style="color:gray">#2</h1>
                    <p style="font-weight: bold;font-size:30px;">Tax Services</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur temporibus ut vero nostrum sit, veritatis asperiores, eveniet atque eligendi numquam modi voluptatibus esse odio dolorem praesentium quis repellendus distinctio quo.</p>
                    <a href="http://localhost/php/joyce//Home.php"><button class="btn btn-light box mt-5">READ MORE</button></a>
                </div>
                <div class="col-md-6 mt-5">
                        <img src="joyce2.png" alt="no image"/>
                    </div>
                    <div class="col-md-6 mt-5">
                            <img src="joyce3.png" alt="no image"/>
                        </div>
                <div class="col-md-6 mt-5">
                        <h1 style="color:gray">#3</h1>
                        <p style="font-weight: bold;font-size:30px;">Accounting Services</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur temporibus ut vero nostrum sit, veritatis asperiores, eveniet atque eligendi numquam modi voluptatibus esse odio dolorem praesentium quis repellendus distinctio quo.</p>
                        <a href="http://localhost/php/joyce//Home.php"><button class="btn btn-light box mt-5">READ MORE</button></a>
                    </div>
        </div>
        <div class="row bg-light  p-5">
            <div class="col-md-12 bg-light text-center mt-5 p-5">
            <h5 style="color:tomato">Why Choose Me</h5>
            <p style="font-weight: bold;font-size:30px;">Accurate Record Keeping</p>
            </div>
        <div class="col-md-4 text-center bg-light">
        <div class="box1 ">
                <h1 style="color:orangered">    <i class="fa fa-clock" aria-hidden="true" ></i></h1>
            <h4 style="padding-top: 20px;font-weight:bold;text-align: center">Always on Time</h4>
            <p>Click edit button to change this text. Lorem ipsum dolor sit amet</p>
        </div>
    </div>
    <div class="col-md-4 text-center">
        <div class="box1 ">
                <h1 style="color:orangered"><i class="fa fa-check" aria-hidden="true"></i></h1>
                <h4 style="padding-top: 20px; font-weight:bold;text-align: center">Hard Working</h4>
                <p>Click edit button to change this text. Lorem ipsum dolor sit amet</p>
        </div>
    </div>
        <div class="col-md-4 text-center">
        <div class="box1 ">
                <h1 style="color:orangered"><i class="fa fa-calendar" aria-hidden="true"></i></h1>
                    <h4 style="padding-top: 20px;font-weight:bold;text-align: center">24/7 Availability</h4>
                    <p>Click edit button to change this text. Lorem ipsum dolor sit amet</p>
        </div>
        </div>
        
            </div>

            <div class="row py-5">
                    <div class="col-md-12  text-center mt-5">
                    <h5 style="color:tomato">Testimonals</h5>
                    <p style="font-weight: bold;font-size:30px;">What my clients Say?</p>
                </div>
                <div class="col-md-4 text-left">
                <div class="box2 p-4">
                <h1 style="color:orangered"><i class="fas fa-quote-left"></i></h1>
                <p>Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                <h3>Amanda Lee</h3>
                <h6>Ceo & Founder Crix</h6>
            </div>
                </div>
            <div class="col-md-4 text-left">
            <div class="box2 p-4 mt-5">
                <h1 style="color:orangered"><i class="fas fa-quote-left"></i></h1>
                    <p>Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    <h3>Adam Cheise</h3>
                    <h6>Director at Dynamic</h6>
                </div>
            </div>
            <div class="col-md-4 text-left">
                <div class="box2 p-4">
                    <h1 style="color:orangered"><i class="fas fa-quote-left"></i></h1>
                        <p>Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        <h3>Adam Cheise</h3>
                        <h6>Director at Dynamic</h6>
                    </div>
                    </div>
            </div>
            <div class="row py-5 text-center">
                <div class="col-md-12">
                <h1 style="font-weight:bold ">A Few of My Clients</h1>
                </div>   
                <div class="row mx-auto">
                        <div class="col-md-12 ml-5">
                                <img src="icon1.jpg" alt="No image" style="margin-right:10px">
                                <img src="icon2.jpg" alt="No image" style="margin-right:10px">
                                <img src="icon3.jpg" alt="No image" style="margin-right:10px">
                                <img src="icon4.jpg" alt="No image" style="margin-right:10px">
                                <img src="icon5.jpg" alt="No image" style="margin-right:10px">
                                <img src="icon6.jpg" alt="No image" style="margin-right:10px">
                            </div>
                         
                           
                        </div>
                    </div>
                
               
               
            </div>
            <div class="row backg ">
                <div class="col-md-6 mt-5">
                    <img src="joyce.png" alt="" style="height: 600px">
                </div>
                <div class="col-md-6 mt-4" >
                    <div class="box3">
                    <h4 style="color: orangered;">Free Estimation</h4>
                    <h1>Request A Quote</h1>
                    <input type="text" placeholder="Name*" class="form-control mt-3 "/>
                    <input type="email" placeholder="Email*" class="form-control mt-3" />
                    <input type="text" placeholder="Phone Number*" class="form-control mt-3" />
                    <input type="text" placeholder="Number of Employees*" class="form-control mt-3" />
                    <input type="text" placeholder="Number of Incoming Invoices*" class="form-control mt-3" />
                    <input type="text" placeholder="Number of Outgoing Invoices*" class="form-control mt-3" />
                    <button class="btn mt-3" style="background-color: orangered;color : white;border-radius: 20px;">GET A QUOTE</button>
                    </div>
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