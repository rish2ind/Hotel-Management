<?php include('header.php');?>
   <html>
    
        <style type="text/css">
            body{
                background-color: black;
               
            }
           
        </style>
    
    
    
     
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
                            
        <div class="container-fluid" style="">
              <div class="row register">
              <div class="col-md-4"></div>
              <div class="col-md-4 ">
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
                     <center><a href="signup.php" style="color: gold; font-size: 16px;">New User ?</a></center>  
                  </div>
                  
                        <!-----------------------------   Sign Up    ------------------------->
                 
                        
                <div class="col-md-4 ">
                  
                </div>  
             </div>       
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    
</html>