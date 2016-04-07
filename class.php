<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
</head>
<body>
		<div class="container">
			<div class="row">

			    <form method="POST" action="" class="col s12">
				<h3>Add Class</h3>
			      <div class="row">
			        <div class="input-field col s12">
			          <input name="c_name" id="" type="text" class="validate">
			          <label for="c_name">Class name</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			           <select name="t_name">
					      <option value=""selected>Choose teacher</option>
					      <option value="1">Option 1</option>
					    </select>
					    <label>Teachers</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="submit" type="submit" name ="submit" class="btn">
			        </div>
			      </div>
			    </form>
			  </div>

		</div>

		<script type="text/javascript">

			  $(document).ready(function() {
			    $('select').material_select();
			  });
		</script>
</body>
</html>
