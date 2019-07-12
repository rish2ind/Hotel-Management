<?php include('header.php'); ?>

 <style type="text/css">
            body{
                background-color: black;
            }
            
        </style>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>



<div class="container-fluid">
    <div class="row register">
        <div class="col-md-4"></div>
        <div class="col-md-4"><h2 style="color: white; text-align: center;">Sign Up</h2>
                       <p style="text-align: center; color: gold;">Sign up to become our customer</p>
                    <form class="contact-form" method="POST" name="signup" onsubmit="return validate()">
                    <div class="form-group ">
                        <lable style="color: gold;">Full Name : </lable>
                        <input type="text" class="form-control" id="fname" required="" name="name">
                        <span id="error_name"></span>
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Email : </lable>
                        <input type="email" class="form-control" required="" name="email">
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Password : </lable>
                        <input id="myInput" type="password" class="form-control" required="" name="password">
                        <span onclick="myFunction()" style="float: right; position: relative; top: -23px; margin-right: 10px; cursor: pointer;">
                            <i class="fas fa-eye" style="display: none;" id="hide1"></i>
                            <i class="fas fa-eye-slash" id="hide2"></i>
                        </span>
                        <span id="error_pass" style="color: red;"></span>
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Phone Number : </lable>
                        <input type="text" class="form-control" id="contact" required="" name="contact">
                        <span id="error_contact" style="color: red;"></span>
                    </div>
                    <div class="form-group">
                    
                        <input type="submit" class="btn btn-info" value="Sign Up" id="signupform" name="signup" style="opacity: 1; margin-left: 40%;">
                    </div>
                </form>
                      <script>
                         
                          
                         function validate(){
                              
                        //***************************  Mobile Validation  ********************* 
                              
                              var phone = document.signup.contact.value;
                              var uname = document.signup.name.value;
                              var pass = document.signup.password.value;
                              if(isNaN(phone)){
                                 alert('Mobile no. are always in numeric form');                                  
                              //     document.getElementById("errorcontact").innerHTML = 'Mobile no. should be a numeric value';
                                  return false;                                  
                              }
                              else if(phone.length > 10 || phone.length < 10){
                                 alert('Mobile no. should contain 10 digit only'); 
                              //    document.getElementById("errorcontact").innerHTML = 'Mobile no. should be of 10 digit';
                                  return false;                                
                              }
                              else if(pass.length < 6){
                                alert('Password should have more than 6 character');
                                  // document.getElementById("errorpass").innerHTML = 'Password should be more than 6 digit long';
                                  return false;
                              }
                              else if(isNaN(uname)){
                                  return true;
                              }
                              
                              else{
                                  alert('Name should have alphabet value');                                  
                                  return false;                                
                              }
                              //************************** Name Validation  **************************
                                                            
                            
                          }  
                          
                       
                            
                          
            </script>
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
                        <lable>Email : </lable>
                        <input type="email" class="form-control" required="" name="email">
                    </div>
                    <div class="form-group">
                        <lable>Password : </lable>
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
<script>
    function myFunction(){
        var x = document.getElementById("myInput");
        var y = document.getElementById("hide1");
        var z = document.getElementById("hide2");
        if(x.type === "password"){
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";
        }
        else{
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block";
        }
    }
</script>

<?php
    include('footer.php');
?>