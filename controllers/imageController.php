<?php


class imageController {

	// Loads Image change view
	public function view()
	{
		require_once('views/view.images.php');
	}
	public function change()
	{
		var_dump($_POST);
		echo "<br>";
		var_dump($_FILES);
	}
}

?>