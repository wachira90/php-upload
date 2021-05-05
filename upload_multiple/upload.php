<html>

<head>
	<title>upload multiple</title>
</head>

<body>
	<?php
	if (isset($_FILES["filUpload"])) {
		foreach ($_FILES['filUpload']['tmp_name'] as $key => $val) {
			$file_name = $_FILES['filUpload']['name'][$key];
			$file_size = $_FILES['filUpload']['size'][$key];
			$file_tmp = $_FILES['filUpload']['tmp_name'][$key];
			$file_type = $_FILES['filUpload']['type'][$key];
			move_uploaded_file($file_tmp, "myfile/" . $file_name);
		}
		echo "Copy/Upload Complete";
	}
	?>
</body>

</html>