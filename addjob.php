<?php
include('control2.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form name="f1" method="get">
<table align="center" border="2">
<tr>
		<td>Title:</td>
		<td><input type="text" name="name" /></td>			
</tr>
<tr>
		<td>Experience:</td>
		<td><input type="text" name="ex" /></td>			
</tr>
<tr>
		<td>Location:</td>
		<td><input type="text" name="lo" /></td>			
</tr>
<tr>
		<td>Job Description:</td>
		<td><textarea name="jd" cols="15" rows="5">

		</textarea></td>			
</tr>
<tr>
	<td align="center" colspan="2">
	<input type="submit" name="submit" value="Add" /></td>
</tr>
</table>
</form>
</body>
</html>
