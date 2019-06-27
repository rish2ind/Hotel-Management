<?php session_start();
?>
   <html>
    <head>
        <title></title>
           <!--   Font Awesome Link   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
        
        <style>
            .form-group .form-control{
                width: 300px;
                
            }
            h3{
                text-align: center;
            }
            form{
                margin-left: 35%;
            }
        </style>
    </head>
    <body>
       <div class="container-fluid">
       <div class="row">
       <div class="col-md-4">
       <h3>By Name</h3>
       <form action="" method="post">
           <div class="form-group">
               <input type="text" class="form-control" name="fname">
           </div>
           <div class="form-group">
               <input type="submit" value="Search" name="search" class="form-control btn btn-success">
           </div>
       </form>
        
        </div>
        <hr>
         <div class="col-md-4">
         <h3>By Email</h3>
        <form action="" method="post">
           <div class="form-group">
               <input type="text" class="form-control" name="email">
           </div>
           <div class="form-group">
               <input type="submit" value="Search" name="searchemail" class="form-control btn btn-success">
           </div>
       </form>
        </div>
        <hr>
         <div class="col-md-4">
         <h3>By Mobile</h3>
        <form action="" method="post">
           <div class="form-group">
               <input type="text" class="form-control" name="mobiles">
           </div>
           <div class="form-group">
               <input type="submit" value="Search" name="searchmobile" class="form-control btn btn-success">
           </div>
       </form>
        </div>
        <hr>
        </div>
        </div>
        
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Room Type</th>
                        <th>Room No.</th>
                    </tr>
                    <?php  include('connect.php');
            if(isset($_POST['search'])){
                $name = $_REQUEST['fname'];
                $sql = "select * from user_booking where fname = '$name'";
                $run = mysqli_query($conn, $sql);
                while ($check = mysqli_fetch_array($run)) {;
             ?>
                    <tr>
                        <td><?php echo $check['id']; ?></td>
                        <td><?php echo $check['fname']; ?></td>
                        <td><?php echo $check['email']; ?></td>
                        <td><?php echo $check['mobiles']; ?></td>
                        <td><?php echo $check['room_type'] ?></td>
                        <td><?php echo $check['Room_No']; ?></td>
                        <td><?php echo $check['cin']; ?></td>
                        <td><?php echo $check['cout']; ?></td>
                    </tr>
                    <?php }
            }
                    
                    ?>
                                   
                                    <!--            Search By Email            -->
                                    
                                    
                    <?php 
            if(isset($_POST['searchemail'])){
                $email = $_REQUEST['email'];
                $sqlemail = "select * from user_booking where email = '$email'";
                $runemail = mysqli_query($conn, $sqlemail);
                while ($checkemail = mysqli_fetch_array($runemail)) {;
             ?>
                    <tr>
                        <td><?php echo $checkemail['id']; ?></td>
                        <td><?php echo $checkemail['fname']; ?></td>
                        <td><?php echo $checkemail['email']; ?></td>
                        <td><?php echo $checkemail['mobiles']; ?></td>
                        <td><?php echo $checkemail['room_type'] ?></td>
                        <td><?php echo $checkemail['Room_No']; ?></td>
                        <td><?php echo $checkemail['cin']; ?></td>
                        <td><?php echo $checkemail['cout']; ?></td>
                    </tr>
                    <?php }
            }
                    
                    ?>
                    
                    <!--            Search By Mobile            -->
                                    
                                    
                    <?php 
            if(isset($_POST['searchmobile'])){
                $mobile = $_REQUEST['mobiles'];
                $sqlmobile = "select * from user_booking where mobiles = '$mobile'";
                $runmobile = mysqli_query($conn, $sqlmobile);
                while ($checkmobile = mysqli_fetch_array($runmobile)) {;
             ?>
                    <tr>
                        <td><?php echo $checkmobile['id']; ?></td>
                        <td><?php echo $checkmobile['fname']; ?></td>
                        <td><?php echo $checkmobile['email']; ?></td>
                        <td><?php echo $checkmobile['mobiles']; ?></td>
                        <td><?php echo $checkmobile['room_type'] ?></td>
                        <td><?php echo $checkmobile['Room_No']; ?></td>
                        <td><?php echo $checkmobile['cin']; ?></td>
                        <td><?php echo $checkmobile['cout']; ?></td>
                    </tr>
                    <?php }
            }
                    
                    ?>
                </table>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    </body>
</html>