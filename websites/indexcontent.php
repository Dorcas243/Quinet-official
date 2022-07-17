
<div class="container-fluid">
<div class="row"> 
<div class="col-lg-8 col-md-6 col-sm-3 col-12">
    <div class="row"> 
<div class="col-lg-8 col-md-6 col-sm-3 col-12 ">
    <span style="font-weight: bold; text-shadow:2px 2px #000; color:#fff; font-size: 50px;">
    Welcome to Quinet 
    <br>
    Official Restaurant
    </span>
    <br><br><br>
    <span style="font-weight: bold; font-size: 25px; color :blue; padding-top: 20px;">
        We love and appreciate your support</span><br><br><br>

        <span style="font-weight: bold; font-size: 15px; color :#fff; text-shadow:2px 2px #000; padding-top: 20px; ">
        We offer delivery throughout the downtown core seven days a week, provide take out,
         fast pick-up and On-site catering in addition to full table service. Our overall 
         decor has also evolved in the short time of our existence to a much softer, cleaner,
          more contemporary casual dining look.</span>
</div>
<div class="col-lg-4 col-md-6 col-sm-3 col-12"> 
   
</div>

<div class="col-lg-12 col-md-6 col-sm-3 col-12"><br><br>
    <button type="button" class="btn btn-primary">Join-Us</button>
</div>
    </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-3 col-12  d-flex justify-content-center align-items-center ">

<?php
if(isset($_GET["signup"])){
    include'register.php';
}else if(isset($_GET["signin"])){
    include'login.php';
}else{
    include'login.php';
}
    
    ?>   

    </div>
</div>
</div>


