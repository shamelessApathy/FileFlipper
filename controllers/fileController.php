<?php
class fileController {
	public function sort()
	{
		var_dump($_POST);
		echo "<br>";
		var_dump($_FILES);
		$fileType = $_POST['type'];
		if ($fileType === 'image')
		{
			$conv = $_POST['image-type'];
		}
		$file = $_FILES['file'];
		$type = $file['type'];
		$name = $file['name'];
		$tmp_name = $file['tmp_name'];
		if ($fileType === 'image')
		{
			$image = new Imagick($tmp_name);
			$splode = explode('/', $tmp_name);
			$tmp_name = $splode[1];
			$image_string = "/var/www/FileFLipper/testing/" . $tmp_name . "." . $conv;
			$image->writeImage($image_string);
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