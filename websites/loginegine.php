<div class="col-lg-12 col-md-6 col-sm-3 col-12 ">
<?php

if (isset($_POST['log_in'])){  
    include 'connect.php';
      $Username = mysqli_real_escape_string($con, $_POST['Username']);
      $ppassword = mysqli_real_escape_string($con, $_POST['ppassword']);  
 $adquery = mysqli_query($con, "SELECT * FROM users WHERE Username='$Username' and ppassword='$ppassword' ");
if (mysqli_num_rows($adquery)>0) {
    while ($adrow=mysqli_fetch_array($adquery)) {
       header('location:index.php?menu');        
        }}else{
            echo 'The Details you have entered are unknown to the system! <br> please try again';
            
        }
    
    }
?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="index.php">Back</a>
        </div>