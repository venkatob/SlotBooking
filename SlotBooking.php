<?PHP
session_start();
$User=$_SESSION["User"];
echo"$User";
?>

<html>
	<body>
	<form name="SlotBooking" method="POST" action="SlotBooking.php">
	<table align="center">
<tr><td>
Day:
 <select name="Day">
  <option value="Sunday">Sunday</option>
  <option value="Monday">Monday</option>
  <option value="Tuesday">Tuesday</option>
  <option value="Wednesday">Wednesday</option>
  <option value="Thursday">Thursday</option>
  <option value="Frday">Friday</option>
  <option value="Saturday">Saturday</option>
</select> </td></tr>

<tr><td>
Free Time:
 <select name="Free_Time">
  <option value="1pm to 2pm">1pm to 2pm</option>
  <option value="4pm to 5pm">4pm to 5pm</option>
  <option value="6pm to 7pm">6pm to 7pm</option>
  
</select> </td></tr>


	
	<tr><td>	<input type="submit" name="submit" value="Book The Slot Time"></tr></td>
	<a href="logout.php">Logout</a>
	<a href="viewbookedslot.php">View Booked Slot</a>
	</form>
</html>

<?PHP
$conn=mysqli_connect("localhost","root","","Scheduler");

if(isset($_POST["submit"]))
{
	$Day=$_POST['Day'];
	$Free_Time=$_POST['Free_Time'];
	$date=date_default_timezone_set('Asia/Kolkata');
	$timee = date("Y-m-d H:i:s");
	$notify="Yet to be wait";
	$qry="insert into slotbooking values('$Day','$Free_Time','$timee','$User','$notify')";
	$qry1="insert into notify values('$notify','$User')";
	 if($conn->query($qry)==true && $conn->query($qry1)==true )
    { 
               echo"Booking confirmed";
        }
        else{
            echo"failed to book ....you already booked on this date... so try to change the time or date....";
        }

}
?>
