<?php
$con=new mysqli("localhost","root","","dentist");
if($con->connect_error){
    die ("sorry the connection didn't went well");
}
?>