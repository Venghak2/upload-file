
<!DOCTYPE html>
<html>
<head>
	<?php
		if(!empty($_FILES['myfile']) && $_FILES['myfile']['size']>0)
		{
			$tmp_name = $_FILES['myfile']['tmp_name'];
			$org_name = $_FILES['myfile']['name'];
			$size 	  = $_FILES['myfile']['size'];
			$type 	  = $_FILES['myfile']['type']; 
			$error 	  = $_FILES['myfile']['error'];
			echo "<p>temporary: $tmp_name</p>";
			echo "<p>original name: $org_name</p>";
			echo "<p>size file: $size</p>";
			echo "<p>type file: $type</p>";
			echo "<p>Error file: $error</p>";
			move_uploaded_file($tmp_name, "image/$org_name");
		}
	
	?>
</head>
<body>
	<form action="index.php" method="post" enctype="multipart/form-data">
		Image:<input type="file" name ="myfile">
		<input type="submit" value = "Upload" >
	</form>
</body>
</html>
