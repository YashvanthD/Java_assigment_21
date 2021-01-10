<!DOCTYPE html>
<html>
<head>
	<title>Generate lab Quetion </title>
</head>
<body>
<br><br>
<center>
<table style="border: 3px solid;border-color:grey; height: 300px; width: 600px;"><td>

<div>
	<center>
		<h1>JAVA Laboratory</h1>
	</center>
</div>

<hr><br>
	<div>
		<center>
			<form method="POST" >
				<input type="submit" name="submit" value="Generate">
			</form>
		</center>
	</div>
<center><h2>

<?php 

    if(array_key_exists('submit', $_POST)) { 
            button1(); 
        } 

            function button1() { 
            	$random=rand(1,12);
            	echo '<h3>Choosen Question Number is : '.$random.'</h3>';
            	$file = 'Labset.txt';
				$searchfor = $random ;
				$contents = file_get_contents($file);
				$pattern = preg_quote($searchfor, '/');
				$pattern = "/^.*$pattern.*\$/m";
				if(preg_match_all($pattern, $contents, $matches)){
				   
					if($random==1 || $random==2)
						{
							print_r($matches[0][0]);
						}
					else{
							echo implode("\n", $matches[0]);
						}
						
					}
				else{
				   echo "No matches found";
					}

				 
				        } 


 ?></h2></center></td>
</table>
</center>



</body>
</html>
