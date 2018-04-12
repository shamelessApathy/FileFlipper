<?php
class FileController {
	public function image()
	{
		$file = $_FILES['image-file'];
		$conv = $_POST['image-type'];
		$name = $file['name'];
		$type = $file['type'];
		$tmp_name = $file['tmp_name'];
		$image = new Imagick($tmp_name);
		$splode = explode('/', $tmp_name);
		$tmp_name = $splode[1];
		$image_string = "/var/www/FileFLipper/testing/" . $tmp_name . "." . $conv;
		$image->writeImage($image_string);
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
	public function video()
	{
			$file = $_FILES['video-file'];
			$conv = $_POST['image-type'];
			$name = $file['name'];
			$type= $file['type'];
			$tmp_name = $file['tmp_name'];
			$splode = explode('/',$tmp_name);
			$tmp_name2 = $splode[2];
			// Something about this command not currently working ---- could have been the path didnt have the capital 'L'
			$exec_string = "ffmpeg -i $tmp_name -c:v libx264 -crf 19 /var/www/FileFlipper/testing/$tmp_name2".".flv";
			exec($exec_string, $out);
			foreach ($out as $key=>$value)
			{
				echo $key;
			}
			$link = "/testing/$tmp_name2".".flv";
			echo "<a href='$link'>$link</a>";
	}
	public function sort()
	{
		var_dump($_POST);
		echo "<br>";
		var_dump($_FILES);
		$fileType = $_POST['type'];
		if ($fileType === 'image')
		{
			$this->image();
		}
		if ($fileType === 'video')
		{
			$this->video();
		}		
	}
}