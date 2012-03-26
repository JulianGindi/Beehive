<body>

	<div class="input">
	<h3>Add Favorite:</h3>
	<?php echo form_open('site/create'); ?>

	<p>
		<label for="Name">Name:</label>
		<input type="text" name="Name" id="Name" />
	</p>

	<p>
		<label for="URL">URL:</label>
		<input type="text" name="URL" id="URL" />
	</p>

	<p>
		<label for="Comments">Comments:</label>
		<input type="text" name="Comments" id="Comments" />
	</p>

	<p>
		<input class="btn" type="submit" value="Submit" />
	</p>

	<?php echo form_close(); ?>

	<h4><?php echo anchor("site/view", "View Links"); ?></h4>
</div>


</body>
</html>