<html>
  <head>
  
  
  
  </head>
   <body>
   
   
<?php

$errname ="";
$fname= "";
$lname="";
$email="";
$area="";
$ph="";
$add="";
$add2="";

if(isset($_POST['submit']))
		{
			
			if(empty($_POST['fname']))
			{
				$errname="* frist Name Required";
			}
			else
			{			
				$fname=htmlspecialchars($_POST['fname']);
				//echo $fname;
			}
			if (empty($_POST['lname']))
			{
				$lname="*last name Required";
			}
			else
			{
				$lname=$_POST['lname'];
			}
			if (empty($_POST['email']))
			{
				$email="*email Required";
			}
			else
			{
				$email=$_POST['email'];
			}
			if (empty($_POST['area']))
			{
				$area="*area Required";
			}
			else
			{
				$pass=$_POST['area'];
			}
			
			if (empty($_POST['ph']))
			{
				$ph="*email Required";
			}
			else
			{
				$ph=$_POST['ph'];
			}
			
			if (empty($_POST['add']))
			{
				$add="*Addess Required";
			}
			else
			{
				$add=$_POST['add'];
			}
			
			if (empty($_POST['add2']))
			{
				$add2="*address2 Required";
			}
			else
			{
				$add2=$_POST['add2'];
			}
		}


?>
   <h1  align="center"style="color:green;">Club Membership Registration</h1>
   <h3 align="center" >Complete the form below to sign up for our membership service</h3>
   <hr>
     <form  method="post" action="" >
	    <table align="center" ><tr><th><br><th> </tr>
		
		<tr>
		<th>Name</th>  
		<td> <input  type="text"  value="<?php echo $fname;?>" name="fname"><br><span style="color:red"><?php echo $errname;?></span></td>
		<td><input type="text" name="lname"placeholder="Write Your last Name"></td>
		</tr>
		<tr align="center">
		<td> </td>
		
		<td ><sup >Frist name</sup></td>
		<td ><sup>Last Name</sup></td>
		
		
		</tr><tr>
		<th><br> </th></tr>
		<tr>
		<th>Email</th>
		<td><input type="text" name="email"placeholder="Write Your Email Addess"></td>
		<tr align="center">
		<td> </td>
		
		<td ><sup >iqbalrashed98@gamil.com</sup></td>
		
		
		
		</tr><tr>
		
		
		</tr><tr><th><br><th></tr>
		<th>Phone</th>
		<td><input type="text" name="area"placeholder="Your phone Area "></td>
		<td><input type="text" name="ph"placeholder="Your phone number "></></td>
		
		<tr align="center">
		<td> </td>
		
		
		
		<td ><sup >Area</sup></td>
		<td ><sup>phone number</sup></td>
		
		<tr>
		<th>Addess</th>
		<td><input type="text" name="add" ></td>
		<tr align="center">
		<td> </td>
		
		<td ><sup >Street addess</sup></td>
		
		
		
		</tr>
		<tr>
		<td></td>
		<td><input type="text" name="add2"></td>
		<tr align="center">
		<td> </td>
		
		<td ><sup >Street addess line 2</sup></td>
		
		
		</tr>
		
		<tr>
		
		<tr >
		<td> </td>
		
		
		<td><input type="text" name="city"></td>
		<td><input type="text" name="code"></td>
		<tr align="center">
		<td> </td>
		<td ><sup >city</sup></td>
		<td ><sup >Code/procince</sup></td>
		
		
		</tr>
		<tr >
		<td> </td>
		
		
		<td><input  type="text" name="zip" style="height:30;width:100px;"></td>
		</tr>
		<tr> <td></td></tr>
		
		<tr align="width:40px">
		<td> </td>
		<td ><sup >postal/zip code</sup></td>
		<tr><td><br><td><tr>
		<tr><th>Birth date</th>
		
		<td><input type="month" name="month"></td>
		<td><input type="date" name="day"></td>
		<td><input type="month" name="year"></td>
		
		</tr>
		<tr align="center">
		<td> </td>
		<td ><sup >Month</sup></td>
		<td ><sup >Day</sup></td>
		<td ><sup >Year</sup></td>
		
		
		
		
		</tr><tr>
		<th><br> </th></tr>
		<tr><td><h3>Where did you here<br>
		about us?</h3></td>
		
		<td><input type="checkbox" n1="A friend or colleauge" name="A friend or colleauge[]" value="A friend or colleauge"> 
		<label for="A friend or colleauge" >A friend or colleauge </label></tr>
		<tr>  </td><td><td><input type="checkbox" n1="Google" name="Google[]" value="Google"> 
		<label for="Google" >Google </label></tr>
		<tr>  </td><td><td><input type="checkbox" n1="Blog post" name="Blog post[]" value="Blog post"> 
		<label for="Blog post" >Blog post </label></tr>
		<tr><td>  </td><td><input type="checkbox" n1="News" name="News[]" value="News"> 
		<label for="News" >News</label></tr>
		<tr></tr>
		<tr></tr>
		<tr>
		<td>
		<input style="background-color:Tomato;height:40px;width:80px;"  type="submit" name="submit" value="submit">
	

		
		
		
		</td>
		
		
		
		</tr>
		
		
		

      		
		
		
		
		
		
		
		</table>
	 
	 
	 
	 
	 </form>
   <?php
echo "<h2>Your Input:</h2>";
echo "frist name:$fname";
echo "<br>";
echo  "Last name:$lname";
echo "<br>";

echo "Email:$email";
 echo  "<br>";
echo  "Area:$area";
 echo  "<br>";
echo "phone Number:$ph";
echo  "<br>";
echo "Address1:$add";
 echo  "<br>";
echo "Address2:$add2";
echo  "<br>";
/*echo "City:$city";
echo "Code:$code";
echo  "<br>";
echo "postal/Zip:$zip";
echo  "<br>";
//echo "Date of bath:"$Month;$date;$year;
//echo  "<br>";
//echo $checkbox value:"$*/
 ?>
   
   
   
   
   
   
   
   </body>










</html>