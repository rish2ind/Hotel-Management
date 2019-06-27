<?php include('header.php');?>
   <html>
    <head>
        <title>Admin Panel</title>
        
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
        <link rel="stylesheet" href="style.css">
        <style type="text/css">
            body{
                background-color: #ffeded;
            }
            .register{
                padding: 25px;
                background-color: black;
                opacity: .9;
            }
        </style>
    </head>
    
    <body>
     
                            <!----------------------------   Sign In         ------------------>
                            
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
                            
        <div class="container-fluid">
              <div class="row register">
              <div class="col-md-6 ">
               <h2 style="color: white; text-align: center;">Sign In</h2>
               <p style="color: gold; text-align: center;">Sign in to your account</p>
            <div class="form-container">
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
                  
                        <!-----------------------------   Sign Up    ------------------------->
                 
                        
                <div class="col-md-6 ">
                   <h2 style="color: white; text-align: center;">Sign Up</h2>
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
             </div>       
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    </body>
</html>