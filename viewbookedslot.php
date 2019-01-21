<?PHP
session_start();
$User=$_SESSION["User"];
echo"$User";
?>

<?PHP
$conn=mysqli_connect("localhost","root","","Scheduler");
$sql="select slotbooking.*,notify.* from slotbooking,notify where slotbooking.User='$User'";
$qry=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($qry))
{  
?>
<html>
	<body>
	<form name="ViewBooking" method="POST" action="viewbookedslot.php">
	<table align="center">	
		 <tr>
                <td class="odd">Day</td>
                <td class="even"><?PHP echo"$row[0]" ?></td>
		</tr>
 <tr>
                <td class="odd">Slot Time</td>
                <td class="even"><?PHP echo"$row[1]" ?></td>
		</tr>
		<tr>
                <td class="odd">Booked Time</td>
                <td class="even"><?PHP echo"$row[2]" ?></td>
		</tr><tr>
                <td class="odd">User</td>
                <td class="even"><?PHP echo"$row[3]" ?></td>
		</tr><tr>
                <td class="odd">Notification</td>
                <td class="even"><?PHP echo"$row[5]" ?></td>
		</tr>
	</table>
</form>
</body>
</html>

<?PHP

$notification=$row[5];

$val='No';
if(strcmp($notification, $val)==0)
{
	echo"<a href='delete.php'>delete</a>";
}

}
?>
<a href="logout.php">Logout</a>

