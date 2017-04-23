<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<head>
		<title>Write a novel to an end and make every 5437th upload visible on a website</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="Write a novel to an end and make every 5437th upload visible on a website">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		</head>
		<body>
		<center>
		<p><a href="/der-planet-der-sechs-loeffel.odt">Der Text (Den Beginn bitte nicht &auml;ndern)</a></p>
		<form enctype="multipart/form-data" action="upload_check_calc.php" method="post">
		<p>Diese Datei hochladen: <input name="uploaddatei" type="file" /></p>
		<p>Upload-Number: <input type="text" name="number" size="60" maxlength="255" /></p>
		<p><input type="submit" value="Send File" /></p>
		</form>
		<p>The latest 67 Files uploaded with the same code as the code calculated the code:</p>
		<?php 
			foreach (glob("hochgeladenes_public/*.*") as $filename) {
				echo '<a href="'.$filename.'">'.$filename.'</a><br />';
			}
		?>
		</center>
		</body>
</html>