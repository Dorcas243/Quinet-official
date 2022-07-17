<div class="row d-flex justify-content-center">
    <div class="col-lg-12 col-md-6 col-sm-3 col-12 " style="border: none; border-radius:15px;">
       <center><span style="color:#fff; text-shadow:2px 2px #000">Register In order to place your Order</span></center>
    </div>
    <div class="col-lg-12 col-md-6 col-sm-3 col-12 ">
        <br>
    </div>     
    <div class="col-lg-8 col-md-6 col-sm-3 col-12 " style="border: none; border-radius:15px;">  
        <br> 
        <center>
        <form method="POST" action="" enctype="multipart/form-data">
            <input type="text" id="firstname" name="firstname" placeholder="firstname" required>
            <br><br>
            <input type="text" id="lastname" name="lastname" placeholder="lastname" required>
            <br><br>
            <input type="text" id="Username" name="Username" placeholder="Username" required>
            <br><br>
            <input type="email" id="email" name="email" placeholder="E-mail address" required>
            <br><br>
            <input type="varchar" id="telephone" name="telephone" placeholder="telephone" required>
            <br><br>
            <input type="text" id="gender" name="gender" placeholder="Gender" required>
            <br><br>
            <input type="password" id="ppassword" name="ppassword" placeholder="password" required>
            <br><br>
            <button type="submit" id="reg_user" name="reg_user" class="btn btn-primary">Register</button>
                </form>
            </center>
                <br>
    </div>
    <div class="col-lg-12 col-md-6 col-sm-3 col-12 ">
        <br>
    </div> 
    <div class="col-lg-6 col-md-6 col-sm-3 col-12" style="border: none; border-radius:15px;">
        <center><span>Do already have an account?<br></span><a href="index.php?signin">Sign-in</a></span><span> Here</span></center>
     </div>



<div class="col-lg-12 col-md-6 col-sm-3 col-12 " >

<?php

if(isset($_POST["reg_user"])){
 
include "connect.php";

$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$Username = mysqli_real_escape_string($con, $_POST['Username']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$telephone = mysqli_real_escape_string($con, $_POST['telephone']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$ppassword = mysqli_real_escape_string($con, $_POST['ppassword']);


$sql = "INSERT INTO users(firstname, lastname, Username, email, telephone, gender, ppassword) values 
('".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["Username"]."', '".$_POST["email"]."', '".$_POST["telephone"]."', '".$_POST["gender"]."', '".$_POST["ppassword"]."')";


            if (mysqli_query($con, $sql)) {
               echo "<center> New record created successfully </center>";
            } else { 
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            
         
}

?>
</div>

</div>