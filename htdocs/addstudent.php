<html>
<head>
<title>Add Student</title>

<style>
	body{
		background-color: #33A7FF;
		text-align: center;
		/*Center the container*/
		margin: 0 auto;
		padding-bottom: 5px;
	}
	form{
		margin: 50px;
		border: 5px solid blue;
		padding: 0px;
		background-color: green;
		padding-top:10px;


	}
</style>



</head>

<form action="http://localhost:8888/studentadded.php" method="post">

<h1><b>Add a New Student</b></h1>

<p>First Name:
<input type="text" name="first_name" size="30" value="" />
</p>

<p>Last Name:
<input type="text" name="last_name" size="30" value="" />
</p>

<p>Email:
<input type="text" name="email" size="30" value="" />
</p>

<p>Street:
<input type="text" name="street" size="30" value="" />
</p>

<p>City:
<input type="text" name="city" size="30" value="" />
</p>

<p>State(2 Characters):
<input type="text" name="state" size="30" maxlength = "3" value="" />
</p>

<p>Zip:
<input type="text" name="zip" size="30"  maxlength = "8" value="" />
</p>


<p>Phone:
<input type="text" name="phone" size="30"  value="" />
</p>

<p>Birth Day (MM/DD/YYYY):
<input type="text" name="birth_date" size="30" value="" />
</p>





<p>
<input type="submit" name="submit" value="Send" />
</p>

</form>

<br />
<br />
<br />

<b>What is in our Database : </b>
<b><a href = "getstudentinfo.php" target = "_blank" title = "Get Info">Get Info</a></b><br/>



</body>
</html>