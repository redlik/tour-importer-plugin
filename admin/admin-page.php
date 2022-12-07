<?php

?>
<h1>Tours Importer</h1>
<p>Use this page to import information from WeTravel tours page. Each tour has an ID number, use it below.</p>

<form method="POST" action="">
	<div class="options">
		<p>
			<label>Insert tour ID</label>
			<br />
			<input type="text" name="tour" value="" />
		</p>
	</div>
	<?php
	wp_nonce_field('add_tour', 'tour-importer');
	?>
	<button type="submit" class="button-primary">Add tour</button>
</form>
