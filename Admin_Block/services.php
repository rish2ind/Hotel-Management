<?php
    include('connect.php');
    $sql = "select * from services";
    $run = mysqli_query($conn, $sql);
    
?>
<html>
    <head>
        <!--   Font Awesome Link   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
        
        <title>Services of hotel</title>
        
        <style type="text/css">
            .jumbo{
                width: 25%;
                background: linear-gradient(lightblue, #2170ef );
                padding: 10px;
                margin-top: 20px;
                margin-left: 115px;
                font-size: 20px;
                border-radius: 10px;
                font-family: 'Century Gothic'; 
                font-weight: 500;
            }
        </style>
    </head>
    <body>
      <div class="jumbotron jumbo ">
          Available Rooms
       </div>
       <div class="container">
        <div class="table-responsive">
            <table class="table table-hover table-strip table-bordered" cellpadding="15px">
                <tr><th>Name</th>
                    <th>Class</th>
                    <th>Description</th>
                    <th>Sub Class Icons</th>
                    <th>Sub Points</th>
                    <th>Changes</th>
                    <th>Delete</th>
                    </tr>
           <?php while($data = mysqli_fetch_array($run))
               {
    ?>
                <tr>
                    <td><?php echo $data['name']; ?></td>      
                    <td><?php echo $data['class']; ?></td>
                    <td><?php echo $data['description']; ?></td>
                    <td><?php echo $data['subclass']; ?></td>
                    <td><?php echo $data['subpoints']; ?></td>
                    <td><a href="services_update.php?id=<?php echo $data['id'];?>" style="text-decoration: none">Edit</a></td>
                    <td><a href="delete-service.php?id=<?php echo $data['id']; ?>" style="text-decoration: none">Delete</a></td>
                </tr>  
                     <?php      }
                           ?>
            </table>
        </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    </body>
</html>