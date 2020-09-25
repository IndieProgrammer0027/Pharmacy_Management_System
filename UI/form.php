<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="assets/css/style.css">
 <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet"> 
<title></title>








<script>
function abc()
{
z=document.forms["xyz"]["fname"].value
if(z=="")
{
alert("please enter your User Name");
return false
}
x=document.forms["xyz"]["uemail"].value
if(x=="" && !(x.includes("@")))
{
alert("please enter your email");
return false
}
y=document.forms["xyz"]["password"].value
if(y=="")
{
alert("please enter your password");
return false
}
n=document.forms["xyz"]["cpassword"].value
if(n=="")
{
alert("please enter Your confirm password");
return false
}
if(n!=y)
{
alert("password donot match");
}

y=document.forms["xyz"]["submit"].value
if(onclick(submit))
{
alert("form submitted successfully");
return false
}




}
</script>







</head>

<body class="container">
<form name="xyz">
	<h1 align="center">User Registration</h1>
<table bgcolor="" align="center">
<tr>
<td>User Name</td>
<td><input type="text" size="" minlength="3"  maxlength="32" name="fname" placeholder="Username"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="uemail" placeholder="Enter your Email"></td>
<tr>
<td>password</td>
<td><input type="password" minlength="4"  maxlength="64"  name="password" placeholder="Enter your password"></td>
</tr>
<tr>
<td>confirm password</td>
<td><input type="password" name="cpassword" placeholder="Enter confirm password"></td>
</tr>
<tr>


<td><input type="submit" value="submit" onclick="return(abc())">
</tr> 
</table>
</form>
</body>
</html>
