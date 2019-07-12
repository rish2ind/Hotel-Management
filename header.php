   <?php 
session_start();
?>
   <html>
    <head>
        <title>Hotel Name</title>
    <!--   Font Awesome Link   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    
    <!-- External CSS Link  -->        
        <link rel="stylesheet" href="style.css">
        
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        
        <style type="text/css">
            /*************************************************   About Section  ************************************************/
            
            .about{
               
                overflow: hidden;
                width: 300px;
                border-radius: 10px;
                box-shadow: 2px 3px 10px;
            }
            .about img{
                width: 100%;
                height: 300px;
                transition: transform .4s;
            }
            .about:hover img{
                transform: scale(1.3);
            }
            
            .zoom .box{
                background-color: black;
                opacity: .5;
                height: 300px;
                width: 250px;
                display: none;
                position: absolute;
                top: -1px;
                color: white;
                font-size: 20px;
                text-align: center;
                padding: 15px;

                
            }
            .zoom:hover .box{
                display: block;
                height: 300px;
                background-color: black;
                z-index: 2;
                width: 300px;
            }
            .zoom{
                overflow: hidden;
                width: 300px;
            }
            .zoom img{
                width: 100%;
                transition: transform .4s;
                height: 300px;    
            }
            .zoom:hover img{
                transform: scale(1.3);
            }
    /***********************************************      Rooms Section  ****************************************/
            .supirior{
                background-color: white;
                padding: 20px;
                box-shadow: 2px 3px 15px ;
                border-radius: 10px;
            }
            
    /****************************************** New Room Section      ***************************************/
            
            .details{
                border: 1px solid black;
                background-color: white;
                box-shadow: 2px 3px 10px;
                height: 400px;
                transition: transform .4s;
                position: absolute;
                top: -200px;
                margin-left: 10px;
            }
            .details:hover{
                transform: scale(1.1);
            }
            .rooms{
                font-size: 20px;
                font-weight: 700;
                color: red;
                letter-spacing: 10px;
                background-color: lightpink;
                padding: 10px;
            }
            .rooms-inner{
                padding: 10px;
                text-align: justify;
                font-size: 16px;
            }
            @media screen AND (max-width: 720px){
                .details{
                    margin-top: 50px;
                    height: 400px;
                    width: 400px;
                    margin-left: 30px;
                    position: relative;
                    top: 10px;
                }
                .details:hover{
                    transform: scale(.9);
                }
                img{
                    width: 100%;
                }
            }
            
                /****************************************      Gallery Section     ******************************************/
              
            #hover{
               
                overflow: hidden;
                width: 300px;
                border-radius: 25%;
                
            }
            #hover img{
                width: 100%;
                height: 300px;
                transition: transform .4s;
            }
            #hover:hover img{
                transform: scale(1.3);
            }
            @media screen and (max-width: 992px){
                #hover{
                    overflow: hidden;
                    margin-left: 20%;
                    width: 300px;
                }
                #hover img{
                    margin-top: 15px;
                    width: 100%;
                    height: 300px;
                    transition: transform .4s;
                }
                #hover:hover img{
                transform: scale(1.3);
            }
            }
            .row{
                margin-right: 0px;
            }
        </style>
    </head>
    <body>
                        <!------------------------------------   Header Section   ------------------------->
                        
        <div class="container-fluid" style="padding: 0px; padding-bottom: 0px;">
            <div class="row">
                <div class="col-md-3 logo">
                    <img src="Images/Hotel.jpg" alt="" height="100px" >
                </div>
                <div class="col-md-9"  style="padding: 0px; border: none; outline: none;">
                    <nav class="navbar navbar-default navigation">
                        <div class="navbar-header">
                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navb">
                                <i class="glyphicon glyphicon-align-center"></i>    
                            </button>
                        </div>                                            
                        
                            <div class="navbar-collapse collapse" id="navb">
                            <ul class="nav navbar-nav navbar-left lists">
                                <li><a href="index.php" >Home </a></li> 
                                <li><a href="new-room-booking.php" >Booking</a></li>
                                <li><a href="about.php" >About</a></li>
                                <li><a href="services.php" >Services</a></li>
                                <li><a href="gallery-user.php" >Gallery</a></li>
                                <li><a href="contact.php" >Contact</a></li>
                                <?php
                        
                                if(isset($_SESSION['user']))
                                {
                                    include('user-connect.php');
                                    
                                    $sql = "select * from user_signup where email = '".$_SESSION['user']."'";
                                    $res = mysqli_query($conn, $sql);
                                    $data = mysqli_fetch_array($res);
                                               
                                    ?>
                                    <li><a href="update_user.php?id=<?php echo $data['id']; ?>">Welcome : <?php echo $data['name']; ?></a></li>
                                     <li><a href="user-logout.php"><span class="glyphicon glyphicon-off" title="Logout"></span></a></li>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <li><a href="signup.php">Signup/login</a></li>
                                    <?php
                                    
                                }
                        ?>
                                    
                        
                            </ul>
                        </div>
                      
                        
                        
                        
                    </nav>
                </div>
            </div>
        </div>