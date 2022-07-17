<!DOCTYPE html>
<html>
<head>
<title>Restaurant website</title>
<link rel="stylesheet" href="Style.css">
<!-- CSS only -->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
crossorigin="anonymous">







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.1.2/jquery.flip.min.js"></script>








 <style>
.dodo{
background:url('images/QD_restaurant.jpg');
background-size: cover;
}
 </style>

</head>
<body class="dodo">

<div class="container-fluid">
<div class="row"> 
<div class="col-lg-12 col-md-6 col-sm-3 col-12">
<br>
</div>
</div>
</div>



<div class="container-fluid">
<div class="row"> 
<?php
include'menu.php';
?>
</div>
</div>



<div class="container-fluid">
<div class="row"> 
<div class="col-lg-12 col-md-6 col-sm-3 col-12">
    <br><br>
</div>
</div>
</div>




<?php
if(isset($_GET["menu"])){
    include'ourmenu.php';
}else if(isset($_GET["aboutus"])){
    include'aboutus.php';
}else if(isset($_GET["contact"])){
    include'contact.php';
}else{
    include'indexcontent.php';
}
    
    ?> 



<div class="container-fluid">
    <div class="row"> 
    <div class="col-lg-12 col-md-6 col-sm-3 col-12">
        <br><br><br>
    </div>
    </div>
    </div>





<div class="container-fluid">
<div class="row"> 
<div class="col-lg-3 col-md-6 col-sm-3 col-12">
<br>
</div>
<div class="col-lg-6 col-md-6 col-sm-3 col-12">
<center>
    copyright &#169 Reserved to Dorcas Quinet
</center>
</div>
<div class="col-lg-3 col-md-6 col-sm-3 col-12">
<br>
</div>
</div>
</div>

</body>