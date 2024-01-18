<?php
require("connection.php");
  $np=$_POST['Fullname'];
  $tel=$_POST['tel'];
  $date=$_POST['date'];
  $time=$_POST['time'];
  $doc=$_POST['doc'];
  $req="insert into appointement values('$tel','$date','$time','$np','$doc')";
  if($con->query($req)){
    echo "<div style='text-align:center; font-size: 40px; color:green;'>Thank you for choosing us. We will call you when your appointment is scheduled.</div>";
}
    else{
    echo "<div style='text-align:center; font-size: 40px; color:red;'>Sorry, an error occurred. Please try again later.</div>";
     }
     
  $con->close();
?>