<div class="row">
    <div class="large-6 columns medium-6 columns small-12 columns">
		<?php
			include_once('html5req.php');

			class Box {
				public $name = "box";
			}

			$box = new Box();
			$box_reference = $box;
			$box_clone = clone $box;

			$box_changed = clone $box;
			$box_changed->name = 'changed box';

			$another_box = new Box();

			echo "<h4>" . "Casual Version ==" . "</h4>";
			/** == is casual and just checks to see if the attributes are the same */
			echo $box == $box_reference ? 'true' : 'false'; //True
			echo "<br>";

			echo $box == $box_clone ? 'true' : 'false'; //True
			echo "<br>";

			echo $box == $box_changed ? 'true' : 'false'; //False
			echo "<br>";

			echo $box == $another_box ? 'true' : 'false'; //True
			echo "<br>";

			echo "<hr>";

			echo "<h4>" . "Strict Version ===" . "</h4>";
			/** === is strict and just checks to see if the attributes are the same */
			echo $box === $box_reference ? 'true' : 'false'; //True
			echo "<br>";

			echo $box === $box_clone ? 'true' : 'false'; //False
			echo "<br>";

			echo $box === $box_changed ? 'true' : 'false'; //False
			echo "<br>";

			echo $box === $another_box ? 'true' : 'false'; //False
			echo "<br>";
		?>
	</div>
</div>