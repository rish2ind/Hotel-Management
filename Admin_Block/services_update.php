<?php
    include('connect.php');
    $id = $_REQUEST['id'];
    $sql = "select * from services where id = '$id'";
    $run = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($run);
?>
   

   <html>
    <head>
        <title>
            Update Services
        </title>
         <!--   Font Awesome Link   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
    </head><body>
        
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
               <?php
                    if(isset($_POST['update'])){
                        $name = $_REQUEST['name'];
                        $class= $_REQUEST['class'];
                        $description = $_REQUEST['description'];
                        $subclass = $_REQUEST['subclass'];
                        $subpoints = $_REQUEST['subpoints'];
                        $update = "update services set name = '$name', class = '$class', description = '$description', subclass = '$subclass', subpoints = '$subpoints' where id = '$id'";
                        $query = mysqli_query($conn, $update);
                        if($query){
                            echo "<script> alert ('Services updated successfully');
                                        window.location.href = 'services.php'; </script>";
                        }
                    }
                
                ?>
                <form action="" method="post">
                    <div class="form-group">
                        <lable><b>Name of Service : </b></lable>
                        <input type="text" value="<?php echo $data['name']; ?>" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <lable><b>Name of Class : </b></lable>
                        <input type="text" class="form-control" value="<?php echo $data['class']; ?>" name="class">
                    </div>
                    <div class="form-group">
                        <lable><b>Description : </b></lable>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"><?php echo $data['description']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <lable><b>Checkbox-class : </b></lable>
                        <input type="text" class="form-control" name="subclass" value="<?php echo $data['subclass']; ?>">
                    </div>
                    <div class="form-group">
                        <lable><b>Sub Points : </b></lable>
                        <input type="text" name="subpoints" class="form-control" value="<?php echo $data['subpoints']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="update" value="Update" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>