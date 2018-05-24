<?php
class fileController {
	public function sort()
	{
		echo "POST: <br>";
		var_dump($_POST);
		echo "<br>";
		echo "FILE:<br>";
		var_dump($_FILES);
		$fileType = $_POST['type'];
		$file = $_FILES['file'];
		$type = $file['type'];
		$name = $file['name'];
		$tmp_name = $file['tmp_name'];
		if ($fileType === 'image')
		{
			$conv = $_POST['image-type'];
			$image = new Imagick($tmp_name);
			if ($image)
			{
				echo "imagick working";
			}
			$splode = explode('/', $tmp_name);
			$tmp_name = $splode[1];
			$image_string = "/var/www/FileFlipper/testing/" . $tmp_name . "." . $conv;
			if ($image->writeImage($image_string))
			{
				echo "it saved!";
			}
			else
			{
				echo "something went wrong!";
			}
		}
		$link = "/testing/" . $tmp_name . "." . $conv;
		echo "<ul>
				<li>Convert: $conv</li>
				<li>FileType: $type</li>
				<li>Name: $name</li>
				<li>TMP_NAME: $tmp_name</li>
			</ul>
		";

		echo "<a href='$link'>$link</a>";
	}
}