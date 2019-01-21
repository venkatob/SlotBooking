<?PHP
session_start();
?>
<html>
	<body>
	<form name="LoginPage" method="post" action="Login1.php">
	<table align="center">
<tr><td>
UserType:
<input type="radio" name="User" value="Alumni">Alumni
<input type="radio" name="User" value="Student1">Student1
<input type="radio" name="User" value="student2">Student2</td></tr>

	<tr><td>	Password:&nbsp&nbsp&nbsp<input type="password" name="Password"placeholder="Password" required=""></tr></td>
	<tr><td>	<center><input type="submit" name="submit" value="Login"></center></tr></td>
	</form>
</html>


<?PHP
$conn=mysqli_connect("localhost","root","","Scheduler");
if(isset($_POST["submit"]))
{
$User=mysqli_real_escape_string($conn,$_POST['User']);
$password=mysqli_real_escape_string($conn,$_POST['Password']);
$alumni="Alumni";
$qry="select * from Registration where User='$User'&&Password='$password'";
$result=mysqli_query($conn,$qry); 
 $fetch1=mysqli_fetch_array($result);
 if(strcmp($User, $alumni)==0)
 {
 	$_SESSION["User"]=$fetch1['User'];
 	header("location:viewbooking.php");
 }
else
{
$qry="select * from Registration where User='$User'&&Password='$password'";
$result=mysqli_query($conn,$qry);
$fetch1=mysqli_fetch_array($result);
$fetch=mysqli_num_rows($result);
if($fetch>0){
	$_SESSION["User"]=$fetch1['User'];
	header("location:SlotBooking.php");
}
else{
	echo"Failed to Login";
}


}
}
?>