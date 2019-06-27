<?php
    session_start();
include('connect.php');
    $fetch = "select * from admin";
    $runadmin = mysqli_query($conn, $fetch);
    $check = mysqli_fetch_array($runadmin);
?>
   <html>
    <head>
        <title>Dashboard</title>
        
         <!--   Font Awesome Link   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
        
        
        <style type="text/css">
            .head{
                background-color:  #050565;
                color: gold;
            }
            .aside{
                background-color: #f5c32c;
                padding: 15px;
                height: 800px;
            }
            .aside ul li a{
                color: black;
                text-decoration: none;
/*                text-shadow: 2px 2px 19px ;*/
            }
            .aside ul li a:hover{
                color: red;
            }
            #dropdown{
                display: none;
                list-style-type: none;
                font-size: 20px;
                font-family: 'Helvetica';
            }
            #dropgallery{
                display: none;
                list-style-type: none;
                font-size: 20px;
                font-family: 'Helvetica';
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 head">
                     <?php
                        
                                if(isset($_SESSION['Aname']))
                                {
                                    include('connect.php');
                                    
                                    $sql = "select * from admin where username = '".$_SESSION['Aname']."'";
                                    $res = mysqli_query($conn, $sql);
                                    $data = mysqli_fetch_array($res);
                                    ?>
                                    <a href="update-admin.php?id=<?php echo $data['username']; ?>"><h1 style="float: left; height: 39px; color: gold">Welcome : <span style="color: white; font-size: 25px;"><?php echo $data['Name']; ?></span></h1></a>
                </div>
                <div class="col-md-6 head">
                    <a href="logout.php"><h2 style="float: right; height: 39px; color: gold;">Logout</h2></a>
                </div>
            </div>
        </div>
        
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-4"></div>
               <div class="col-md-4">
                   <form action="" method="post">
                       <div class="form-group">
                           <lable><b>Name : </b></lable>
                           <input type="text" name="Name" value="<?php echo $check['Name']; ?>"  class="form-control">
                       </div>
                        <div class="form-group">
                           <lable><b>User Id : </b></lable>
                           <input type="text"  class="form-control" value="<?php echo $check['username']; ?>" name="username">
                       </div>
                        <div class="form-group">
                           <lable><b>Password : </b></lable>
                           <input type="text"  class="form-control" value="<?php echo $check['password']; ?>" name="password">
                       </div>
                       <div class="form-group">
                           <input type="submit" name="update" value="Update" class="form-control btn btn-info">
                       </div>
                       
                   </form>
               </div>
               <div class="col-md-4"></div>
           </div>
       </div>
       
                                    <?php
                                }
                    else{
                        echo "<script> alert('Please login to your account');
                            window.location.href = 'Login.php';
                        </script>";
                    }
                        ?>