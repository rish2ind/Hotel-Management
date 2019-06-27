<?php
    session_start();
?>
   <html>
    <head>
        <title>Dashboard</title>
        
         <!--   Font Awesome Link   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
        
        
        <style type="text/css">
            .head{
                background-color:  #050565;
                color: gold;
            }
            .aside{
                background-color: #f5c32c;
                padding: 15px;
                height: 800px;
            }
            .aside ul li a{
                color: black;
                text-decoration: none;
/*                text-shadow: 2px 2px 19px ;*/
            }
            .aside ul li a:hover{
                color: red;
            }
            #dropdown{
                display: none;
                list-style-type: none;
                font-size: 20px;
                font-family: 'Helvetica';
            }
            #dropgallery{
                display: none;
                list-style-type: none;
                font-size: 20px;
                font-family: 'Helvetica';
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 head">
                     <?php
                        
                                if(isset($_SESSION['Aname']))
                                {
                                    include('connect.php');
                                    
                                    $sql = "select * from admin where username = '".$_SESSION['Aname']."'";
                                    $res = mysqli_query($conn, $sql);
                                    $data = mysqli_fetch_array($res);
                                    ?>
                                    <a href="update-admin.php?id=<?php echo $data['username']; ?>"><h1 style="float: left; height: 39px; color: gold">Welcome : <span style="color: white; font-size: 25px;"><?php echo $data['Name']; ?></span></h1></a>
                                   
                </div>
                <div class="col-md-6 head">
                    <a href="logout.php"><h2 style="float: right; height: 39px; color: gold;">Logout</h2></a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 aside" >
                    <ul style="list-style-type: none;">
                        <li><h2><a class="active" href="new-bookings.php" target="demo"  >Dashboard</a></h2></li>
                        <li><h3><a href="customers.php" target="demo">Our Customers</a></h3></li>
                        <li><h3><a href="room-availabilty.php" target="demo" >Rooms Availabilty</a></h3></li>
                        <li><h3><a href="gallery.php" onclick="myGallery();" target="demo">Gallery</a></h3>
                                <ul id="dropgallery">
                                    <li><a href="Add-Gallery.php" target="demo">Add Images</a></li>
                                </ul>
                            </li>
                        <li><h3><a href="services.php" onclick="myFunction();" target="demo" >Services</a></h3>
                            <ul id="dropdown">
                                <li><a href="new-services.php" target="demo">Add Services</a></li>
                                <li><a href="#" >Delete Services</a></li>
                            </ul>
                        </li>
                        <li><h3><a href="find-customers.php" target="demo">Search Customers</a></h3></li>
                    </ul>                 
                </div>
                <div class="col-md-9">
                    <iframe src="iframe-default.php" name="demo" width="100%" height="800" scrolling="no" frameborder="no"></iframe>
                </div>
            </div>
        </div>
        
        <script type="text/javascript">
            function myFunction(){
                var x = document.getElementById('dropdown');
                if(x.style.display === 'none'){
                    x.style.display = 'block';
                }
                else{
                    x.style.display = 'none';
                }
            }
            function myGallery(){
                var x = document.getElementById('dropgallery');
                if(x.style.display === 'none'){
                    x.style.display = 'block';
                }
                else{
                    x.style.display = 'none';
                }
            }
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    </body>
</html>
 
                                    <?php
                                }
                    else{
                        echo "<script> alert('Please login to your account');
                            window.location.href = 'Login.php';
                        </script>";
                    }
                        ?>