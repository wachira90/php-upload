<html>

<head>
	<title>ThaiCreate.Com Tutorial</title>
</head>

<body>
	<?php
	
	$src = $_FILES["filUpload"]["tmp_name"];
	$dst = "myfile/" . $_FILES["filUpload"]["name"];

	if (move_uploaded_file($src, $dst)) {
		echo "Copy/Upload Complete";
	}
	?>
</body>

</html>