<!-- receive file from client -->
<html>
	<head>
		<meta charset='utf-8' />
	</head>
	<body>
		<?php 
		ini_set('display_error', '1'); // runtime setting. 
		$uploaddir = '/home/csg/Desktop/webstudy/phpstudy/phpstudy/upload/'; // tempory directory path
		$uploadfile = $uploaddir.basename($_FILES['userfile']['name']); // path + last file/directory name
		echo '<pre>';
		// file check for security. 
		if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
			echo 'file is valid, uploaded successfully\n';
		}
		else{
			echo 'file can be attacked\n';
		}

		print_r($_FILES);
		echo '</pre>';
		?>
		
		
		<img src="<?= $_FILES['userfile']['name']; ?>" />
	</body>
</html>