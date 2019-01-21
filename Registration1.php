<?PHP
session_start();
?>

<html>
<body>
<form name="Registeration Page" action="Registration1.php" method="POST">
<table align='center'>


<tr><td>
UserType:&nbsp
<input type="radio" name="User" value="Alumni">Alumni
<input type="radio" name="User" value="Student1">Student1
<input type="radio" name="User" value="student2">Student2</td></tr>

<tr><td>Password:</font></td><td><input type="password" placeholder="password..." required="" name="Password"> </td></tr>
<tr><td>Confirm Password:</font></td><td><input type="password" placeholder="Confirm Password..." name="Confirm_Password" required=""></td></tr>

<tr><td>Gender:<input type="radio" name="Gender" value="female">female
<input type="radio" name="Gender" value="male">male</td></tr>

<tr><td>Gmail:<td><input type="Email" required="" name="Gmail"placeholder="Email" value=""></td></tr>



<tr><td><input type="submit" name="submit" value="Insert">
<input type="reset" name="reset" value="clear"></td></tr>

</table>
</form>
</body>
</html>

<?PHP
if(isset($_POST["submit"]))
{

    $User=$_POST['User'];
    $password=$_POST['Password'];
    $confirm_password=$_POST['Confirm_Password'];

    $gender=$_POST['Gender'];
    $gmail=$_POST['Gmail'];
    
    
	$date=date_default_timezone_set('Asia/Kolkata');
	$timee = date("Y-m-d H:i:s");
    if(strcmp($password, $confirm_password)==0)
    {
    $conn=mysqli_connect("localhost","root","","Scheduler");
    $qry="insert into Registration values('$User','$password','$confirm_password','$gender','$gmail','$timee')";
    if($conn->query($qry)==true)
    { 
     echo"Success";
     
            //header("location:login.php");
        }
        else{
            echo"failed";
        }
    }
    else
    	echo"Password should be same";
        
   
}
?>