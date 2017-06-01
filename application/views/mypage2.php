<html>

<head>
    <link href="<?php echo base_url();?>assets/css/style.css"rel="stylesheet">
<title>linking with global variable
Form 
</title>

</head>
<body>
<form method="post" action ="<?PHP echo base_url();?>Datamgmt/getData" /> 

<p> <label for ="Username">Username: </label> <input type="text"  name = "username" required="required" placeholder="Enter Username" /> </p>
<p> <label for="Password">Password:</label> <input type="Password"  name="password" required="required" placeholder="Enter Password" /> </p>
<input type = "Submit" value="Login">
</form>
<a href="save.php?username=prashant&address=Baghbazar">Click</a> <!-- character limit is 4096-->
</body>

</html>