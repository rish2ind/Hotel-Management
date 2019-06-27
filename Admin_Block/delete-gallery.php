<?php 

    include('connect.php');
    $id = $_REQUEST['id'];
    $idquery = "select * from gallery where id = '$id'";
    $runid = mysqli_query($conn, $idquery);                            

                                echo "<script> alert('Are you sure you want to delete this image'); </script>";
                            $delete = "delete from gallery where id = '$id'";
                            $img = mysqli_query($conn, $delete);
                            if($img){
                                echo "<script> 
                                window.location.href = 'gallery.php';
                                alert('Image deleted succssfully');                                        
                                </script>";
                            }
                            else{
                                echo "<script> alert('Image deleted unsuccssfully'); </script>";
                            }
    
?>