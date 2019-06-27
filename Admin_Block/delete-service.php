<?php
    include('connect.php');
$id = $_REQUEST['id'];
    $sql = "select * from services where id = '$id'";
    $run = mysqli_query($conn, $sql);
        echo "<script> alert ('Are you sure you want to delete this service ?'); </script>";
        $delete = "delete from services where id = '$id'";
        $deleterun = mysqli_query($conn, $delete);
            if($deleterun){
                echo "<script> alert('Service is deleted successfully'); 
                    window.location.href = 'services.php';    </script>";
                
            }
            else {
                    "<script> alert(' Unsuccessfully'); 
                    window.location.href = 'services.php';    </script>";
            }
?>