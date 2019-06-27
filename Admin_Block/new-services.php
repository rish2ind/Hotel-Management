<?php
    include('connect.php');
    $sql = "select * from services where id = '5'";
    $run = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($run);
?>
   <html>
    <head>
        <title>Add new services</title>
        
        <!--   Font Awesome Link   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
        
        <style type="text/css">
            .form{
                width: 500px;
                margin-top: 30px;
                background-color: #f1f1f1;
                padding: 20px;
                box-shadow: 2px 3px 15px;
                border-radius: 10px;
            }
            .form lable{
                font-size: 18px;
                margin-top: 10px;        
            }
            .form input, textarea{
                margin-top: 10px;
                font-size: 18px;
            }
            .form input[type=submit]{
                padding: 15px;
                font-size: 18px;
                border-radius: 10px;
            }
            .jumbo{
               
                background: linear-gradient(lightblue, #2170ef );
                padding: 10px;
                margin-top: 20px;
                font-size: 20px;
                border-radius: 10px;
                font-family: 'Century Gothic'; 
                font-weight: 500;
            }
            body{
                background: linear-gradient(#8a2be2, #ff00ff, #9400d3);
            }
        </style>
    </head>
    
    <body>
        
        <div class="container">
         <div class="row">
         <div class="col-md-4">
             
         </div>
         <div class="col-md-4">
          <div class="jumbotron jumbo">
              New Services
          </div>
           <div class="form">
           <?php
                include('connect.php');
               
               if(isset($_POST['submit'])){
                   $name = $_POST['service'];
                   $class = $_POST['class'];
                   $descript = $_POST['description'];
                   $subclass = $_POST['subclass'];
                   $subpoints = $_POST['subpoints'];
                   $sql = "insert into services (name, class, description, subclass, subpoints) values ('$name', '$class', '$descript', '$subclass', '$subpoints')";
                   $run = mysqli_query($conn, $sql);
                   if($run){
                       echo "<script> alert ('Services added successfully');
                       window.location.href = 'services.php';</script>";
                       
                   }
                   else{
                       echo "<script> alert ('Unsuccessfully');
                       window.location.href = 'services.php';</script>";
                   }
               }
               ?>
            <form action="" method="post">
               
                <div class="form-group">
                    <lable><b>Name of service : </b></lable>
                    <input type="text" class="form-control" placeholder="Add new services" name="service"  required="">
                </div>
                
                <div class="form-group">
                    <lable><b>Icon : </b></lable>
                    <input type="text" class="form-control" placeholder="Enter the class name of icon" name="class"  required="">
                </div>
                <div class="form-group">
                    <lable><b>Description : </b></lable>
                    <textarea placeholder="Enter the description of service......" name="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <lable><b>Check-class : </b></lable>
                    <input type="text" class="form-control" placeholder="Enter check font class" name="subclass">
                </div>
                <div class="form-group">
                    <lable><b>Sub Points : </b></lable>
                    <input type="text" class="form-control" placeholder="Enter sub points of description" name="subpoints">
                </div>
                <center>    <input type="submit" class="btn btn-success" value="Submit" name="submit"></center>
                
            </form>
            </div>
            </div>
            
            <div class="col-md-4">
                
            </div>
            </div>
        </div>       
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    </body>
</html>