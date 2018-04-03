<!-- This will be interesting using the NEW Bootstrap 4.0  apparently you don't need to do like col-md-4 anymore going to give it a try -->
<?php require_once(HEADER); ?>

<div class='container'>
	<div style='margin-top:100px;width:100%;'></div>
	<div class='row'>
		<div class='col-sm'><h3>FILE</h3></div>
		<div class='col-sm'>        </div>
		<div class='col-sm'><h3>FLIPPER</h3></div>
	</div>
	<div class='row'>
		<form action='file/sort' method='POST' enctype="multipart/form-data">
		<div class='form-group'>
			<label>File Type</label>
			<select name='type' id='file-type'>
				<option>Select One</option>
				<option value='image'>Image</option>
				<option value='sound'>Sound</option>
				<option value='video'>Video</option>
			</select>
		</div>
		<div class='form-group invisible' id='image-form'>
			<label>Image Output Extension</label>
			<select name='image-type' id='image-type'>
				<option>Choose One</option>
				<option value='jpg'>JPG</option>
				<option value='png'>PNG</option>
				<option value='gif'>GIF</option>
				<option value='bmp'>BMP</option>
			</select>
			<label>File</label>
			<input type='file' name='file' id='file'/>
			<button type='submit'>Submit</button>
		</div>
		</form>
	</div>
</div>
<?php require_once(FOOTER);?>

<script src="/resources/js/front.js" rel="javascript" type="text/javascript"></script>