


<?php
date_default_timezone_set("Africa/Nairobi");
$date=date('F j, Y g:i:a');





$con = mysqli_connect("localhost","root","","QuinetOfficial");

    $servername = "localhost"; 
    $username = "root";
    $password = "";
    $dbname = "QuinetOfficial";
    $message = "";
    $ip_user = $_SERVER['REMOTE_ADDR'];
            
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}

try {
    $pdo = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>