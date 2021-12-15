<?php

include("registrationcheck.php");

?>
<html>
<head>
	<title>E-Tourism</title>
</head>
<body>
	<center>
        <form method="POST" action="" onsubmit="return validateForm()">
		<fieldset style="width: 350px; height: 500px;">
        <legend style="color:Yellow" align="center"><h1 id="b3"><b>Client Registration</b></h1></legend>
        <br>
        <hr>
        <label for="uname">Username: </label>
        <input type="text" name="uname" id="uname" placeholder=""><br> 
        <br>
		<label for="pass">Password: </label>
        <input type="password" name="pass" id="pass" placeholder=""><br> 
		<br>
		<label for="cfpass">Confirm Password: </label>
        <input type="password" name="cfpass" id="cfpass" placeholder=""><br> 
		<br>
		<label for="name">Name: </label>
        <input type="text" name="name" id="name" placeholder=""><br> 
		<br>
		<label for="rad"> Gender: </label>
        <label for="male"> Male </label>
        <input type="radio" id="male" name="rad" id="rad">
        <label for="female"> Female </label>
        <input type="radio" id="female" name="rad" id="rad"><br>
        <br>
		<label for="dob">Date Of Birth: </label>
        <input type="date" name="dob" id="dob" value=""><br>
        <br>
		<label for="email">Email: </label>
        <input type="text" name="email" id="email" value=""><br>
        <br>
		<label for="address">Address: </label>
        <input type="text" name="address" id="address" placeholder=""><br> 
        <br>
		<label for="state">State: </label>
        <input type="text" name="state" id="state" placeholder=""><br> 
        <br>
		<label for="phone">Phone: </label>
        <input type="text" name="phone" id="phone" placeholder=""><br> 
        <br>
		<input type="submit" name="submit" id="submit" value="Register">
		</fieldset>
        <hr>
</form>

<p id="para"></p>

<script src="clientRegistrationHandle.js"></script>
	</center>
    <?php
        echo $error;

    ?>

</body>
</html>