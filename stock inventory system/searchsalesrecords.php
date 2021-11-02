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
	<label>Please key in the sales record ID to be displayed: <br></label>
	<br>
    <input type="text" id="titles" name="title" placeholder="ID****" maxlength="30" required="required"><br/></p>
	<br>
	<br>
	<p><button type="submit">Submit</button>
</form>
<?php
	echo"<a href=index.php><div id='text'>Return to Home Page</div></a>"
?>
</body>
</html>