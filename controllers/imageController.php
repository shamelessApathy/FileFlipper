<?php


class imageController {

	// Loads Image change view
	public function view()
	{
		require_once('views/view.images.php');
	}
	public function change()
	{
		$ext = $_POST['extension'];
		$output = $_POST['output'];
		$image_tmp = $_FILES['file-input']['tmp_name'];
		$imagick = new Imagick($image_tmp);
		$imagick->writeImage("/var/www/FileFLipper/testing/test1.png");
	}
}

?>