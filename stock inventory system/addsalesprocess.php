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
        <?php // read the comments for hints on how to answer each item
        $dir = "../../data/salesrecords"; // folder name
        $file = "sales.txt"; // text file name
        
        // check whether the folder is available
		$filename = $dir . "/" . $file;
        if(!is_dir($dir)) {
			mkdir("../../data");
            mkdir($dir); 
        }
		if(!file_exists($filename)) {
            fopen($filename,"w"); 
        }

        // check whether the form input is not empty
        if (!empty($_POST["id"]) && !empty($_POST["title"]) && !empty($_POST["description"]) && !empty($_POST["date"])) {
			$id= $_POST["id"];
			$title= $_POST["title"];
			$desc= $_POST["description"];
			$date= $_POST["date"];
			
			
			$id =  " $id ";
			$title =  " $title ";
			$desc =  " $desc ";
			$date =  " $date ";
			$idPattern="^(\w*ID\w*)\d{4}$";
			$patternCheck=true;
           	
			if (!empty($_POST["id"])) {
            $id = $_POST["id"];
            $idpattern = "^(\w*ID\w*)\d{4}$^";
            if (!preg_match($idpattern,$id)) {
                echo "<p><div id='clr2'>ID must start with ID followed by 4 digits.</div></p>";
                echo "<p>You can use the browser 'Go Back' button to return to the Search Job Vacancy Page.</p>"; 
                echo "<a href=index.php>Return to Home Page</a>";
                exit;
            }
        }
		
			if (!empty($_POST["title"])) {
            $title = $_POST["title"];
            $titlepattern = "/^([\w\s,.!]*)$/";
            if (!preg_match($titlepattern,$title)) {
                echo "<p><div id='clr2'>Title can only contains alphanumeric characters including spaces, comma, period (full stop), and exclamation point.</div></p>";
                echo "<p>You can use the browser 'Go Back' button to return to the Search Job Vacancy Page.</p>"; 
                echo "<a href=index.php>Return to Home Page</a>";
                exit;
            }
        }
		
            $chkUnique=fopen($filename, "r");
			if($chkUnique){
				while(!feof($chkUnique)){
					$data = fgets($chkUnique);
					if(strpos($data, $id) !== FALSE){
						$patternCheck=false;
						echo"<p>The ID is already existed. Please enter another ID</p>";
						echo "<p>You can use the browser 'Go Back' button to return to the Search Job Vacancy Page.</p>"; 
						echo "<a href=index.php>Return to Home Page</a>";
						exit;
					}
				}
			}
			fclose($chkUnique);
					
			if ($patternCheck==true)
				$data = "{$id}\t{$title}\t{$desc}\t{$date}\n"; // addslashes mean to add \ before ',",\ and null
				$handle = fopen($filename,"a");
				if (is_writable($filename)){ // can write
						echo "<p>Sales record added succesful!</p>"; // echo thank you for signning
                fwrite($handle, $data."\n"); // write the file
				}
				else{ // cannot write
					echo "<p>Sales record added failed!</p>"; // echo cannot write
				}
            
				fclose($handle); // close file
			} 
			else { // no input 
				echo "<p>You must fill in everything!</p>"; // echo no input
				echo "<p>Use the browser 'Go Back' button to return to the Postjob form</p>"; // echo solution
			}
?>
        <p><a href=index.php><div id='text'>Return to Home Page</div></a>
    </body>
</html>