<?php
    include('header.php');
    include('user-connect.php');
    $id = $_REQUEST['id'];
    $sql = "select * from user_signup where id = '$id'";
    $run = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($run);

    if(isset($_POST['update'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['password'];
        $contact = $_REQUEST['contact'];
        
        $update = "update user_signup set name = '$name', email = '$email', password = '$pass', contact = '$contact'";
        $runuser = mysqli_query($conn, $update);
        if($runuser){
            echo "<script> alert ('Your profile updated successfully');
                    window.location.href = 'index.php';
                    </script>";
        }
    }
?>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <form action="" method="post">
         
                <div class="form-group">
                    <lable><b>Name : </b></lable>
                    <input value="<?php echo $data['name']; ?>" type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <lable><b>Email : </b></lable>
                    <input type="email" name="email" value="<?php echo $data['email']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <lable><b>Password : </b></lable>
                    <input type="text" name="password" value="<?php echo $data['password']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <lable><b>Contact : </b></lable>
                    <input type="text" name="contact" value="<?php echo $data['contact']; ?>" class="form-control">
                </div>
            
                <center><input type="submit" value="Update" name="update" class="btn btn-success"></center>
            </form>
            
        </div>
        <div class="col-md-4"></div>
    </div>
</div>