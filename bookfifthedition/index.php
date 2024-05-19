<?php require_once 'html5req.php';?>
<h2>PHP and MySQL Web Development Book Fifth Edition</h2>
<h3>Chapter 1</h3>
<form action="processorder3.php">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="medium-4 cell"></div>
			<div class="medium-4 cell"></div>

			<table style="border: 0px;">
				<tr style="background: #CCCCCC;">
					<td style="width: 150px; text-align: center;">Item</td>
					<td style="width: 15px; text-align: center">Quantity</td>
				</tr>
				<tr>
					<td>Tires</td>
					<td><input type="text" name="tireqty" size="3" maxlength="3"></td>
				</tr>
				<tr>
					<td>Oil</td>
					<td><input type="text" name="oilqty" size="3" maxlength="3"></td>
				</tr>
				<tr>
					<td>Spark Plugs</td>
					<td><input type="text" name="sparkqty" size="3" maxlength="3"></td>
				</tr>
			</table>
			<div class="medium-12">
				<button type="submit" class="button float-right" value="Submit Order">Submit Order</button>
			</div>
		</div>
	</div>
</form>
<?php require_once 'footer.php';?>