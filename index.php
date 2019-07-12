<?php
    include('header.php');
    include('user-connect.php');
    $sql = "select * from services"; // Fetching data for services
    $run = mysqli_query($conn, $sql);
    
    
?>
                               
                                <!-----------------------------------   Carousel Section   ---------------------->
           
            <div class="carousel slide" id="image" data-ride="slide" style="position: relative; top: -20px;">
                <ol class="carousel-indicators">
                    <li data-target="#image" data-slide-to="0" class="active"></li>
                    <li data-target="#image" data-slide-to="1" ></li>
                    <li data-target="#image" data-slide-to="2" ></li>
                </ol>
                <div class="carousel-inner">
                   <a name="Home"></a>
                    <div class="item active">
                        <img src="Images/carousel.jpg" alt="Image">
                    </div>
                    <div class="item">
                        <img src="Images/carousel1.jpg" alt="Image">
                    </div>
                    <div class="item">
                        <img src="Images/carousel2.jpg" alt="Image">
                    </div>
                </div>
                <a href="#image" class="carousel-control left" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                </a>
                <a href="#image" class="carousel-control right" role="button"data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                </a>
                <a name="Booking"></a>  
            </div>
            
       <div class="jumbotron jumbo" style="position: relative; top: -20px;">
         <a href="new-room-booking.php">Book your Rooms</a>
       </div>
       
                            <!--------------------------------  About Section    --------------------------->
                            
        <div class="container" >
            <h1 style="font-size: 60px;"><a name="About"></a>About Our Hotel</h1>
            <p style="font-size: 18px; margin-bottom: 15px;">Beautiful Restaurant and Hotel design websites selection, the best gallery of Restaurant Websites design and Hotel Website Design examples.</p>
            <div class="row">
            <div class="col-md-4"><div class="about"><img src="Images/Oberoi%20(1).jpg" alt="" class="img-responsive images"></div></div>
                <div class="col-md-4"><div class="about"><img src="Images/bar1.jpg" alt="" class="img-responsive images"></div></div>
                <div class="col-md-4"><div class="about"><img src="Images/about.png" alt="" class="img-responsive images"></div></div>
            </div>    
        </div><br><br>
        
                                    <!---------------------   Services   ----------------------->
                                    
        <div class="container-fluid" style="background-image: url(Images/services.jpeg); background-size: cover;">
            <a name="Services"></a><h1 style="text-align: center; font-family: 'Arial'; color: gold;">Our Services</h1>
            <div class="row">
      <?php while($data = mysqli_fetch_array($run)) {
                
                ?>
                <div class="col-md-3 services">
                    <i class="<?php echo $data['class']; ?> icons"></i><h4><?php echo $data['name']; ?></h4><p class="service-details">
                        <?php echo $data['description'];  ?>
                    </p>
                     <span style="color: gold;"><?php echo $data['subclass']; ?> </span>&nbsp;<span style="color: white;"> <?php echo $data['subpoints']; ?></span> <br>
<!--                     <i class="fas fa-check" style="color: gold;"></i> &nbsp;<span style="color: white;"> Non Vegitarian </span><br>-->
<!--                     <i class="fas fa-check" style="color: gold;"></i> &nbsp;<span style="color: white;"> 24 Hours Room Service </span> <br>-->
                </div> <?php } ?>
               
            </div>
        </div><br><br>
        
                            <!--------------------------------    Gallery Section   ------------------------->
                            
        <div class="container-fluid">
           <a name="Gallery" id="jqueryGallery"></a>
            <h1 style="text-align: center; font-family: 'Arial';">Gallery</h1>
            <div class="row">
        <?php 
                $sqlgallery = "select * from gallery limit 4";
            $rungallery = mysqli_query($conn, $sqlgallery);
                while($datagallery = mysqli_fetch_array($rungallery)) { ?>
                <div class="col-md-3" id="col">
                   <div class="zoom">
                    <img src="Admin_Block/Gallery/<?php echo $datagallery['pic'];  ?>" id="img" alt="">
                     <div class="box">
                         <p style="margin-top: 40px; border-top: 3px solid white;
                         border-bottom: 3px solid white;"><?php echo $datagallery['hover']; ?></p>
                     </div>
                   </div>                                       
                </div>
            <?php } ?>
                  </div>
            </div> 
               <!-- 
                <div class="col-md-3" >
                   <div class="zoom"> 
                    <img src="Images/Inside_new1.jpg" alt="" id="img1" class="img-responsive">
                       <div class="box">
                    <p style="margin-top: 40px; border-top: 3px solid white;
                border-bottom: 3px solid white;"> Dinning Area</p>
                </div>
                    </div>
                    
                </div>
                
            
                <div class="col-md-3">
                   <div class="zoom">
                    <img src="Images/inside_new2.jpg" alt="" id="img2" class="img-responsive">
                    <div class="box">
                     <p style="margin-top: 40px; border-top: 3px solid white;
                border-bottom: 3px solid white;">Hall</p>
                </div>
                    </div>
                    
                </div>
                <div class="col-md-3"><div class="zoom">
                    <img src="Images/inside_new3.jpg" id="img3" alt="" class="img-responsive" >
                    <div class="box">
                     <p style="margin-top: 40px; border-top: 3px solid white;
                border-bottom: 3px solid white;">Waiting Room</p>
                </div>
                    </div>-->
                    
            <br>
            <div class="row">
                <center><a href="gallery-user.php"><button class="btn btn-danger">More Images</button></a></center>
            </div>
        <br>
            <script>
                $(document).ready(function(){
                    $(window).scroll(function(){
                        var positionTop = $(document).scrollTop();
                        console.log(positionTop);
                        if((positionTop > 1620) && (positionTop < 1929)){
                            $('#col').addClass('animated bounceInLeft', 2000);
                          
                        }
                    });
                });
</script>
        <br>
        
                                <!----------------------------    Contact Us Section     --------------------------->
                                
        <div class="container-fluid" style="background-image: url(Images/jaiselmer1.jpg); background-size: cover;">
           <div class="row">
               
           <div class="col-md-6 contact">
         <a name="Contact"></a>   <h1 style="text-align: center; font-family: 'Arial'; color: white;">Contact Us</h1>
            
                <span style="color: gold;">Phone :</span> <span style="color: white;">+91 8560XXXXXX </span><br><br>
                <span style="color: gold;">Email :</span><span style="color: white;"> INFO@HOTEL.COM </span> <br><br>
                <span style="color: gold;">Address :</span><span style="color: white;"> Jacob Rd, Civil Lines, Jaipur, Rajasthan 302006 </span> <br><br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.727619630101!2d75.78298191452059!3d26.912138266594702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db40b6ed16f5f%3A0x902e85e7d6dc03fb!2sJai+Mahal+Palace!5e0!3m2!1sen!2sin!4v1558615764072!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            <div class="col-md-6 contact">
                <h1 style="color: white; font-family: 'Arial'; text-align: center;">Feedback</h1>
                <p style="text-align: center; color: gold;">Give your feedback</p>
                
                <form action="" class="contact-form">
                    <div class="form-group ">
                        <lable style="color: gold;">Full Name : </lable>
                        <input type="text" class="form-control" required="" name="name">
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Email : </lable>
                        <input type="email" class="form-control" required="" name="email">
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Feedback : </lable>
                        <textarea name="feedback" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                    
                        <input type="submit" class="btn btn-info" value="Submit" name="submit" style="opacity: 1; margin-left: 40%;">
                    </div>
                </form>
            </div>
        </div>
        </div> 
        <?php
include('footer.php');
   ?>