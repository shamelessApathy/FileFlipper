<?php require_once(HEADER);?>

<div class='container'>
	<div class='spacer'></div>
	<div class='row'>
	<form action="/image/change" method='POST' enctype='multipart/form-data' name='image'>
	<div class='col-sm'>
	<label>Input File Extension</label><br>
	<select name='extension'>
		<option value="default">Select One</option>	
		<option value="jpg">JPG</option>	
		<option value="png">PNG</option>	
	</select><br>
	</div>
	<div class='col-sm'>
		<label>Desired Output</label><br>
		<select name='output'>
			<option value='default'>Select One</option>
			<option value='jpg'>JPG</option>
			<option value='png'>PNG</option>
		</select><br>
	</div>
	<div class='col-sm'><input type='file' name='file-input'/></div>
	<div class='col-sm'><input type='submit'></div>
	</div>
</div>