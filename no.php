
<?php
session_start();
$User=$_SESSION["User"];
echo"$User";

$conn=mysqli_connect("localhost","root","","Scheduler");
	

	$qry="update notify set notify='No' where User='$User'";
	if($conn->query($qry)==true)
    {    
   echo "Updated data successfully\n";   
   }
   else
    echo"Could not update data";

?>	