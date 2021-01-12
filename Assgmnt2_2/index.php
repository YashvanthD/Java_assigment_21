<!DOCTYPE html>
<html>
<head>
	<title>Image Search</title>
</head>
<body>
<br><br>
<center>
<div>
	<center>
		<h1>Image Database</h1>
	</center>
</div>

<hr><br>
	<div>
		<center>
			<form method="POST" >
				<label style="width: 50px;">Enter Image Name : </label><input type="text" name="ImageName">.jpeg<br><br>
				<input type="submit" name="submit" value="Check">
			</form>
		</center>
	</div>
<center><h2>

<?php 

    if(array_key_exists('submit', $_POST)) { 
            button1(); 
        } 

            function button1() { 
            	  
				$searchfor =$_POST['ImageName'].'.jpeg';
				echo '<h3>Searching.... for Image <h3 style="color:blue;">'.$searchfor.'</h3></h3>';
				$dir    = './img';
			$files1 = scandir($dir);
			$flag=0;
			$len=count($files1);

			for($i=0;$i<$len;$i=$i+1){
				if($files1[$i]==$searchfor)
					{
						$flag=1;
						break;}
					}
					if($flag)
				{
					$path='./img/'.$searchfor;
					//echo $path;
					echo '<img src="'.$path.'" >';

				}
				else
				{
					echo '<h1 style="color:red">Not Found</h1>';
				}
	
				}


 ?></h2></center></td>




</body>
</html>