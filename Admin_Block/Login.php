<?php
session_start();
include("connect.php");

    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        
        $sql = "select * from admin where username = '$user' AND password = '$pass'";
        $res = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($res);
        if(is_array($data)){
            $_SESSION['Aname'] = $data['username'];
            echo $_SESSION['Aname'];
         echo "<script>
                    alert('Login Successful');
                    window.location.href = 'dashboard.php';
                    </script>";
        }
        else{
            echo "<script>
                    alert('Invalid Username and Password');
                    window.location.href='Login.php';
                    </script> ";
        }
     }
?>
   

   
   <html>
    <head>
        <title>Admin Panel</title>
        
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
        
        <style type="text/css">
            body{
                background-color: #ffeded;
            }
            .form-container{
                width: 400px;
                margin: 0 auto;
                background-color: #f1f1f1;
                padding: 20px;
                margin-top: 20px;
                box-shadow: 2px 3px 8px rgba(0, 0, 0, 0.2);
            }
            .form-group .form-control{
                border: none;
                border-bottom: 1px solid lightblue;
            }
            .heading{
                padding: 5px;
                width: 400px;
                margin: 0 auto;
                background-color: #f1f1f1;
                margin-top: 50px;
                box-shadow: 2px 3px 8px rgba(0, 0, 0, 0.2);
            }
        </style>
    </head>
    
    <body>
        
        <div class="container">
               <div class="heading">
                 <center><h1>Admin Page</h1></center>
               </div>
            <div class="form-container">
                <form action="" method="post">
                    <div class="form-group">
                        <lable><b>Username :</b></lable>
                        <input type="text" name="username" class="form-control" required="" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <lable><b>Password</b></lable>
                        <input type="password" class="form-control" name="password" required="" placeholder="Enter your password">
                    </div>
                    <input type="submit" class="btn btn-info" value="Submit" name="submit">
                </form>
            </div>        
                    
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    </body>
</html>