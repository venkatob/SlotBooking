<?php
session_start();
$User=$_SESSION["User"];
echo"$User";

$conn=mysqli_connect("localhost","root","","Scheduler");
	
	
	$qry="delete from slotbooking where User='$User'";
	if($conn->query($qry)==true)
    {    
    	$qry="delete from notify where User='$User'";
    	if($conn->query($qry)==true)
    		{
    			echo "Updated data successfully\n";
    		}
    	    else
    	    {
    	    	echo"Could not update data";
    	    }
    
    }
    else
    {
    	echo"Could not update data";
    }

?>
<a href="viewbooking.php">Back</a>