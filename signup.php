<?php include('header.php'); ?>

 <style type="text/css">
            body{
                background-color: black;
            }
            
        </style>
<div class="container-fluid">
    <div class="row register">
        <div class="col-md-4"></div>
        <div class="col-md-4"><h2 style="color: white; text-align: center;">Sign Up</h2>
                       <p style="text-align: center; color: gold;">Sign up to become our customer</p>
                    <form class="contact-form" method="POST">
                    <div class="form-group ">
                        <lable style="color: gold;">Full Name : </lable>
                        <input type="text" class="form-control" required="" name="name">
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Email : </lable>
                        <input type="email" class="form-control" required="" name="email">
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Password : </lable>
                        <input type="password" class="form-control" required="" name="password">
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Phone Number : </lable>
                        <input type="text" class="form-control" required="" name="contact">
                    </div>
                    <div class="form-group">
                    
                        <input type="submit" class="btn btn-info" value="Sign Up" name="signup" style="opacity: 1; margin-left: 40%;">
                    </div>
                </form>
                       <?php
                        include('user-connect.php');
                            
                        if(isset($_POST['signup'])){
                            $uname = $_REQUEST['name'];
                            $uemail = $_REQUEST['email'];
                            $upass = $_REQUEST['password'];
                            $ucontact = $_REQUEST['contact'];
                                
                                $check = "select * from user_signup where email = '$uemail'";
                                $check_mobile = "select * from user_signup where contact = '$ucontact'";
                            
                            $result_email = mysqli_query($conn, $check);
                            $result_mobile = mysqli_query($conn, $check_mobile);
                            
                            if(mysqli_num_rows($result_email) > 0){
                                echo "<script>alert ('Email id already exists');
                                window.location.href = 'user-login.php';</script>";
                            }
                            else if(mysqli_num_rows($result_mobile) > 0){
                                echo "<script>alert ('Mobile no. already exists');
                                window.location.href = 'user-login.php';
                                </script>";
                            }
                            else{
                            $sql = "insert into user_signup (name, email, password, contact) values('$uname','$uemail','$upass','$ucontact')";
                            
                            $res = mysqli_query($conn, $sql);
                            if($res){
                                echo "<script>alert ('Please signin to proceed');
                                 window.location.href = 'user-login.php';</script>";
                            }
                            else{
                                echo "<script> 
                                    alert ('Failed');
                                </script>";
                            }
                            }
                        }
                        
                  ?>
                  </div>
        <div class="col-md-4"></div>
    </div>
        <div class="row" style="background-color: black;">
                     
                        <?php
                            include('user-connect.php');
        
                        if(isset($_POST['signin'])){
                            $email = $_REQUEST['email'];
                            $password = $_REQUEST['password'];
                            
                            $log = "select * from user_signup where email = '$email' and password = '$password'";
                        
                            $run = mysqli_query($conn, $log);
                            $data=mysqli_fetch_array($run);
                            if($data)
                            {                                
                                $_SESSION['user'] = $data['email'];
                            
                                echo "<script>
                                    alert ('Login Successfull');
                                    window.location.href= 'index.php';
                                </script>";
                            }
                            else{
                                echo "<script>
                                    alert ('login failed');
                                </script>";
                            }
                        }
                
        ?>
                <center> <span style="color: gold; font-size: 18px;">Already a member ?</span> &nbsp;<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Sign In</button></center>
                 <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                           <button class="close" type="button" data-dismiss="modal">&times;</button>
                            <h2 class="modal-title">Sign In</h2>
                        </div>
                        <div class="modal-body">
                            <form action="" class="contact-form" method="post">
                    
                    <div class="form-group">
                        <lable style="color: gold;">Email : </lable>
                        <input type="email" class="form-control" required="" name="email">
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Password : </lable>
                        <input type="password" class="form-control" required="" name="password">
                    </div>
                    
                    <div class="form-group">
                    
                        <input type="submit" class="btn btn-info" value="Sign In" name="signin" style="opacity: 1; margin-left: 40%;">
                    </div>
                </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
</div>
<br>

<?php
    include('footer.php');
?>