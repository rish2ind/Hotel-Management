<?php
    include('user-connect.php');
    include('header.php');
    if(isset($_POST['submit'])){
        $name = $_REQUEST['fname'];
        $email = $_REQUEST['email'];
        $mobile = $_REQUEST['mobiles'];
        $roomtype = $_REQUEST['room_type'];
        $roomno = $_REQUEST['Room_No'];
        $cin = $_REQUEST['cin'];
        $cout = $_REQUEST['cout'];
        
        $sql = "insert into user_booking (fname, email, mobiles, room_type, Room_No, cin, cout) values ('$name', '$email', '$mobile', '$roomtype', '$roomno', '$cin', '$cout')";
        $run = mysqli_query($conn, $sql);
        if($run){
            echo "<script> alert ('Your Room has been Booked !!');
                    window.location.href = 'index.php';
                    </script>";
        }
        else{
            echo "<script> alert ('Booking Failed'); </script>";
        }
    }
?>
          <?php   if(isset($_SESSION['user'])) {       ?>
                <!---------------------------------------------        Personal Details   --------------------------------->
                
       <body style="background-image: url('Images/jaisel.jpg');" onload="document.registration.room_type.focus()">          
   <div class="container">
       <div class="row block" >
          <?php
            $sqli = "select * from user_signup where email = '".$_SESSION['user']."'";
            $run = mysqli_query($conn, $sqli);
           while ($data = mysqli_fetch_array($run)){
           ?>
           <div class="col-md-6">
               <center><h1>Personal Details</h1></center>
               <form name="registration" onSubmit="return formValidation();" method="POST">
           <div class="form-group">
               <lable><b>Name : </b></lable>
               <input type="text" class="form-control" value="<?php echo $data['name'];  ?>" name="fname" required="">
               <p id="name"></p>
           </div>
           <div class="form-group">
               <lable><b>Email Id : </b></lable>
               <input type="email" class="form-control" name="email" value="<?php echo $data['email'];  ?>" required="">
               <p id="email"></p>
           </div>
           <div class="form-group">
               <lable><b>Mobile Number : </b></lable>
               <input type="text" class="form-control" name="mobiles" value="<?php echo $data['contact'];  ?>" required="">
               <p id="mobile"></p>
           </div>
              <?php  } ?>
               </div>
               <div class="col-md-6">
                  <center><h1>Rooms Details</h1></center>
                   <div class="form-group">
                       <lable><B>Types of Rooms</B> <sup style="color: red;">*</sup></lable>
                        <select name="room_type" id="" class="form-control" required="">
                            <optgroup lable="Select-a-room">
                            <option value="SUPIRIER ROOM">SUPIRIER ROOM</option>
                            <option value="DELUX ROOM">DELUX ROOM</option>
                            <option value="SINGLE ROOM">SINGLE ROOM</option>
                            <option value="GUEST HOUSE">GUEST HOUSE</option>
                            </optgroup>
                        </select>       
                   </div>
                   <div class="form-group">
                       <lable><b>No. of Rooms</b> <sup style="color: red;">*</sup></lable>
                       <select name="Room_No" id="" class="form-control" required="">
                           <option value="default" selected="">  </option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                       </select>
                   </div> 
                  <div class="form-group">
                       <lable><b>Check-in</b></lable>
                       <input type="date" class="form-control" name="cin">
                   </div>
                   <div class="form-group">
                       <lable><b>Check-out</b></lable>
                       <input type="date" class="form-control" name="cout">
                   </div>
           <input type="submit" name="submit" class="btn btn-info">
           
       </form>
               </div>
           
       </div>
   </div>
        </body>
<?php

  include('footer.php');
}
else {
    echo "<script> alert ('Please first signin to your account');
            window.location.href = 'user-login.php';
    </script>";
}
?>