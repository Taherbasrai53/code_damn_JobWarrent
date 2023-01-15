<!DOCTYPE html>
<html>
<head>
	<title>search engine by the bois</title>
	<style>
		input{
			width: 400px;
			height:35px;
			border:1px solid green;
			border-radius:5px;
		}
	</style>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<table border="3px" width="60%" align="center" cellspacing="10">
			<tr>
			<td>Candidate Name</td>
			<td><input type="text" name="Candidate_name"></td>
			</tr>
			<tr>
			<td>Location</td>
			<td><input type="text" name="Location"></td>
			</tr>
			<tr>
			<td>Designation</td>
			<td><input type="text" name="designation"></td>
			</tr>
			<tr>
			<td>Current Company</td>
			<td><input type="text" name="Current_Company"></td>
			</tr>
			<tr>
			<tr>
			<td>total years of experience</td>
			<td><input type="text" name="Experience"></td>
			</tr>
			<tr>
			<td>key skills</td>
			<td><input type="text" name="key_skills"></td>
			</tr>
			<tr>
			<td>Email</td>
			<td><input type="text" name="Email"></td>
			
			<tr>
			<td colspan="2" align="center"><input type="submit" name="addwebsite">
		     <input type="reset" name="reset">
			</td>
			
			</tr>
		</table>
	</form>

</body>
</html>


<?php
include("database.php");
if($_POST["addwebsite"])
{
    $candidate_name=$_POST['Candidate_name'];
	$Location=$_POST['Location'];
	$designation=$_POST['designation'];
	$Current_Company=$_POST['Current_Company'];
	$Experience=$_POST['Experience'];
	$key_skills=$_POST['key_skills'];
	$Email=$_POST['Email'];

	if($candidate_name !="" && $Location !="" && $designation !=""&&$Current_Company !="" && $Experience !=""&& $key_skills !="" && $Email !="" )
	{
		$query= "INSERT INTO jobs values('$candidate_name','$Location','$designation','$Current_Company','$Experience','$key_skills','$Email')";
		$data= mysqli_query($conn, $query);

		if($data)
		{
			echo "<script>alert('response has been inserted')</script>";
		}
	}
	else
	{
        echo "<script>alert('mandatory feilds not filled')</script>";
	}
}


?>