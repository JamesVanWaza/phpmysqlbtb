<?php include 'nav.php';?>
<div class="row">
	<section>
	<?php
echo "<span class='echospan'>Current Version: </span>" . OPENSSL_VERSION_TEXT . "<br>";
echo "<span class='echospan'>Current Version Number: </span>" . OPENSSL_VERSION_NUMBER;
?>

	</section>
</div>
<?php include 'footer.php';?>
