<?php

//fetchdata.php



if(isset($_REQUEST["action"]))

{

 $con = mysqli_connect("localhost","root","","QuinetOfficial");

 $output = '';

  if($_POST["action"] == "Meals")

 {

  $query = "SELECT Food FROM ourmenu WHERE Meals = '".$_POST["query"]."' GROUP BY Food";

  $result = mysqli_query($con, $query);

  $output .= '<option value="">Select the Food that you are interesed in</option>';

  while($row = mysqli_fetch_array($result))

  {

   $output .= '<option value="'.$row["Food"].'">'.$row["Food"].'</option>';

  }

 }

 if($_POST["action"] == "Food")

 {

  $query = "SELECT Drinks FROM ourmenu WHERE Food = '".$_POST["query"]."' GROUP BY Drinks";

  $result = mysqli_query($con, $query);

  $output .= '<option value="">Select the Drinks that you are interesed in</option>';

  while($row = mysqli_fetch_array($result))

  {

   $output .= '<option value="'.$row["Drinks"].'">'.$row["DepartmenDrinkst"].'</option>';

  }

 }

 if($_POST["action"] == "Drinks")

 {

  $query = "SELECT Dessert FROM ourmenu WHERE Drinks = '".$_POST["query"]."'";

  $result = mysqli_query($con, $query);

  $output .= '<option value="">Select the Dessert that you wish to persue</option>';

  while($row = mysqli_fetch_array($result))

  {

   $output .= '<option value="'.$row["Dessert"].'">'.$row["Dessert"].'</option>';

  }

 }

 echo $output;

}

?>

