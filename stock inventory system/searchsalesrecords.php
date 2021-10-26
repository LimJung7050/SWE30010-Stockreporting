<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="Managing IT Project" />
<meta name="keywords" content="Web,programming" />
<link href=style.css rel=stylesheet type=text/css />
<title>Stock Inventory System</title>
</head>
<body>

<h1>Stock Inventory System</h1>
<hr>

<form action = "searchsalesprocess.php" method = "GET" >
	<label>Sales Records Title:<br></label>
    <input type="text" id="titles" name="title" placeholder="title" maxlength="30" required="required"><br/></p>
	
	<p><button type="submit">Submit</button>
</form>
<?php
	echo"<a href=index.php><div id='text'>Return to Home Page</div></a>"
?>
</body>
</html>