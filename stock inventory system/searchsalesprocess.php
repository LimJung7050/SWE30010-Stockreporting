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

<p><b>Stock Inventory System</b></p>
	<?php
		$filename = "../../data/salesrecords/sales.txt"; // locate the file
		$title= $_GET["title"];
		$handle = fopen($filename, "r"); // open the file in read mode
		$list = array();
		
			if ($handle) {
                while (!feof($handle)) {  // loop while not end of file
                    $data = fgets($handle);  //read a line from the text file
                    // if job title is found
                    if ((strpos($data, $title)) !== FALSE) {
                        $split = (explode("\t",$data)); // split the text from file
                        $list[$data] = $split[3]; // add new element into associative array
                    }
                }
                fclose($handle); // close the text file
                
                    // Sort the associative array in asending order
                    asort($list);
                    // Loop through the $list array
                    foreach ($list as $x => $x_value) {
                        $x_true = (explode("\t",$x));
						echo "</br></br>";
                        echo "<div class=\"box\"><p><strong>Sales record ID: </strong>", $x_true[0], "</br></br>";
                        echo "<strong>Title: </strong>", $x_true[1], "</br></br>";
                        echo "<strong>Description: </strong>", $x_true[2], "</br></br>";
                        echo "<strong>Date: </strong>", $x_value, "</br></br>";
                        
                    }
                
            }
			
 
	echo"<a href=searchsalesrecords.php><div id='clr'>Search for another sales record</div></a>";
	
	echo"<a href=index.php><div id='text'>Return to Home Page</div></a>"
?>

</body>
</html>