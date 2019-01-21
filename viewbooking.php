<?PHP
session_start();
$User=$_SESSION["User"];
echo"$User";
?>
<?PHP

$conn=mysqli_connect("localhost","root","","Scheduler");

$sql="select * from slotbooking";
$qry=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($qry))
{  
?>

<html>
	<body>
	<form name="ViewBooking" method="POST" action="viewbooking.php">
	<table align="center">	
		 <tr>
                <td class="odd">Day</td>
                <td class="even"><?PHP echo"$row[0]" ?></td>
		</tr>

		 <tr>
                <td class="odd">Slot </td>
                <td class="even"><?PHP echo"$row[1]" ?></td>
		</tr>
		<tr>
                <td class="odd">User Name </td>
                <td class="even"><?PHP echo"$row[3]" ?></td>
		</tr>

		<tr><td>

<input type="radio" name="User" value="Student1">Student1
<input type="radio" name="User" value="student2">Student2</td></tr>

		<tr><td>	<input type="submit" name="submit" value="Notify Yes"></tr></td>
		<tr><td>	<input type="submit" name="submitno" value="Notify No"></tr></td>

	</table>
</form>
</body>
</html>

<?PHP
}
?>

<?php
$conn=mysqli_connect("localhost","root","","Scheduler");
if(isset($_POST["submit"]))
{	
	$use=$_POST['User'];
	$qry="update notify set notify='yes' where User='$use'";
	if($conn->query($qry)==true)
    {    
   echo "Updated data successfully\n";   
   }
   else
    echo"Could not update data";
}
?>

<?php
$conn=mysqli_connect("localhost","root","","Scheduler");
if(isset($_POST["submitno"]))
{	
	$use=$_POST['User'];
	$qry="update notify set notify='No' where User='$use'";
	if($conn->query($qry)==true)
    {    
   echo "Updated data successfully\n";   
   }
   else
    echo"Could not update data";
}
?>	
<a href="logout.php">Logout</a>