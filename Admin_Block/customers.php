<?php 
    include('connect.php');
    $sql = "select * from user_signup";
    $run = mysqli_query($conn, $sql);
    
?>
   <html>
    <head>
        <title></title>
          <!--   Font Awesome Link   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
        
    </head>
    <body>
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                    </tr>
                    <?php while($data = mysqli_fetch_array($run)) { ?>
                    <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['contact']; ?></td>
                    </tr>
                    <?php  } ?>
                </table>
            </div>
        </div>
    </body>
</html>