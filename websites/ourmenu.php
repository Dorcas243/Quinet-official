

<div class="container">
<div class="row">



<div class="col-lg-12 col-md-12 col-sm-12" style="background-color:#fff; border-radius:2%;"">
<div class="container">
<div class="row justify-content-between">









<form  method="post"  enctype="multipart/form-data">

<?php

include 'connect.php';
$Meals = '';
$query = "SELECT Meals FROM ourmenu GROUP BY Meals ORDER BY Meals ASC";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result))
{
$Meals .= '<option value="'.$row["Meals"].'">'.$row["Meals"].'</option>';
}

?>
<select class="form-select form-select-md mb-3 form-control action" data-live-search="true" data-live-search-style="begins"  id="Meals" name="Meals">
<option value="" disabled selected >Which Meal are you ordering for?</option>
<?php echo $Meals; ?>
</select><span></span>
</div>



<br>



<div class="form-group select-boxes" class="form-control">
<select class="form-select form-select-md mb-3 form-control action" data-live-search="true" data-live-search-style="begins"  id="Food" name="Food">
<option value="" disabled selected >In Which school are you?</option>
<?php echo $Food; ?>
</select><span></span>
</div>

<br>

<div class="form-group form-select">
<select class="form-control action" id="Drinks" name="Drinks">
<option value="">In Which Drinks are you?</option>
</select><span></span>

</div>

<br>

<div class="form-group form-select">
<select class="form-control" id="Drinks" name="Drinks">
<option value="">Which course are you persueing?</option>
</select><span></span>
</div>

<br><br>

</form>




</div>
</div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12"><br></div>



</div>
</div>















<script>
$(document).ready(function(){

$('.action').change(function(){

if($(this).val() != '')

{

var action = $(this).attr("id");

var query = $(this).val();

var result = '';

if(action == "Meals")

{

result = 'Food';

}else if(action == "Food")
{

result = 'Drinks';

}

else

{

result = 'Dessert';

}

$.ajax({

url:"fetchmenudata.php",

method:"POST",

data:{action:action, query:query},

success:function(data){

$('#'+result).html(data);

}

})

}

});

});
</script>
