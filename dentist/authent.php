<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			margin-top: 20px;
			margin-bottom: 20px;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
			color: #333;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<?php
		require("connection.php");
        $reqq="SELECT * FROM authentification";
        $res=$con->query($reqq);
        $n=$_POST['username'];
        $p=$_POST['password'];
        $r=mysqli_fetch_assoc($res);
        if(($r['name']==$n) and ($r['pass']==$p)){
        $req = "SELECT * FROM appointement";
		$result = $con->query($req);
		    echo "<table>";
		    echo "<tr><th>phonenumber</th><th>datebook</th><th>timebook</th><th>fullname</th><th>doctor</th><th>delete</th><th>next appointement</th></tr>";
		    while($row = mysqli_fetch_assoc($result)) {
		        echo "<tr><td>" . $row["phonenumber"] . "</td><td>" . $row["datebook"] . "</td><td>" . $row["timebook"] ."</td><td>".$row["fullname"]. "</td><td>" .$row["doctor"] . "</td><td><form name='f' method='POST' action='delete.php'><input type='submit' value='-'></td><td><form name='f1' method='POST' action='add.php'><input type='submit' value='+'></td></tr>";
		    }
		    echo "</table>";}
                else {
                    header("Location:admin.php?error=1");
                }
		mysqli_close($con);
	?>
</body>
</html>
