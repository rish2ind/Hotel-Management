<html>
    <head>
        <title>Add New Images in gallery</title>
        
        <!--   Font Awesome Link   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
        
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
         Add New Images
       </div>
       <?php include('connect.php');
            if(isset($_POST['upload'])){
                $pic = $_FILES['images']['name'];
                $path = 'Gallery/';
                $sql = "insert into gallery (pic) values ('$pic')";
                $run = mysqli_query($conn, $sql);
                if($run >= 1){
                    move_uploaded_file($_FILES['images']['tmp_name'], $path.$pic);
                    echo "<script> alert ('Image insert successfully'); 
                        window.location.href = 'gallery.php';
                    </script>";
                }
            }
        ?>
        <div class="container">
           
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="file" class="form-control" name="images">
                </div>
                <div class="form-group">
                    <input type="submit" name="upload" value="Upload" class="btn btn-success">
                </div>
            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    </body>
</html>