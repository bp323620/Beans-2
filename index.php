<!DOCTYPE html>
<html>
<head>

   <title>Collect User Data</title>

</head>
<body>

   <p>Please enter the following details:</p>
	
   <form action="handle-form.php" method="post">

<p><label>First Name:</label> <input type="text" name="firstname" 
        size="20" maxlength="40" /></p>

	<p><label>Last Name:</label> <input type="text" name="lastname" size="20" 
              maxlength="40" /></p>
	<p><label>Age:</label> <input type="text" name="age" size="2" 
              maxlength="3" /></p>
	<p><label>House Number:</label> <input type="text" name="housenumber" size="20" 
              maxlength="40" /></p>
	<p><label>Street:</label> <input type="text" name="street" size="20" 
              maxlength="40" /></p>
	<p><label>Town/City:</label> <input type="text" name="towncity" size="20" 
              maxlength="40" /></p>
	<p><label>County:</label> <input type="text" name="county" size="20" 
              maxlength="40" /></p>
	<p><label>Post Code:</label> <input type="text" name="postcode" size="20" 
              maxlength="40" /></p>
	

	<p><input type="submit" value="Submit My Details">

   </form>
	
</body>
</html>

