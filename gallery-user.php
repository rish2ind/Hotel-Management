<?php
    include('header.php');
?>
           <div class="container-fluid">
     <!--       <div class="row">
            <div class="col-md-3">
             <div id="hover">
       <img src="Images/Gallery/image1.jpg"  class="img-responsive" width="300px" alt="">
    
      </div>
      </div>
      <div class="col-md-3">
             <div id="hover">
       <img src="Images/Gallery/image2.jpg" class="img-responsive" width="300px" alt="">
    
      </div>
      </div>
      <div class="col-md-3">
             <div id="hover">
       <img src="Images/Gallery/image3.jpg" class="img-responsive" width="300px" alt="">
      </div>
      </div>
      <div class="col-md-3">
             <div id="hover">
       <img src="Images/Gallery/image4.jpg" class="img-responsive" width="300px" alt="">
      </div>
      </div>
      </div> -->
      <div class="row" style="margin-top: 10px;">
         <?php include('user-connect.php');
          $sqlgallery = "select * from gallery";
          $rungallery = mysqli_query($conn, $sqlgallery);
          while ($datagallery = mysqli_fetch_array($rungallery)) {
          ?>
          <div class="col-md-3" id="image" style="margin-top: 10px;">
              <div id="hover">
                  <img src="Admin_Block/Gallery/<?php echo $datagallery['pic']; ?>" alt="" class="img-responsive">
              </div>
          </div>
          
          <?php } ?>
      </div>
       </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
  <script src="Personal-Validation.js"></script>
   
   <script>
        $(document).ready(function(){
            $('#image').fadeIn();
        });
        </script>
        <br>
    <?php
    include('footer.php');
?>