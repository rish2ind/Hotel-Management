<?php include('header.php'); ?>

 <style type="text/css">
            body{
                background-color: #ffeded;
            }
            .register{
                padding: 25px;
                background-color: black;
                opacity: .9;
                position: relative;
                left: 7px;
            }
        </style>
<div class="container-fluid" style="background-image: url('Images/jaiselmer1.jpg'); background-size: cover;">
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
                        
                  ?><center> <a href="user-login.php">Already a member ? </a></center></div>
        <div class="col-md-4"></div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
</div>