<?php
    include('connect.php');
    $id = $_REQUEST['id'];
    if(isset($_POST['update'])){
        $hover = $_REQUEST['hover'];
        $sql = "update gallery set hover = '$hover' where id = '$id'";
        $run = mysqli_query($conn, $sql);
        if($run){
            echo "<script> alert ('Gallery was updated');
                    window.location.href = 'gallery.php';
                    </script>";
        }
    }
    $fetch = "select * from gallery where id = '$id'";
    $rundetails = mysqli_query($conn, $fetch);
?>
   

   <html>
    <head>
        <title>Update your gallery</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
        <style>
            form input{
                width: 300px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                   <?php $data = mysqli_fetch_array($rundetails); ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <lable><b>Hover Details : </b></lable>
                            <input type="text" name="hover" value="<?php echo $data['hover']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Update" name="update" class="form-control btn btn-success">
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </body>
</html>