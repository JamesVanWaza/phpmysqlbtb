<?php include 'nav.php';?>
<div class="row">
	<section>
	<?php
echo "Current Version of OpenSSL: " . OPENSSL_VERSION_TEXT . "<br>";
echo "Current Version number of OpenSSL: " . OPENSSL_VERSION_NUMBER;
?>
	<h2>Cipher Methods</h2>
<?php
/** Gets the Cipher Methods */
$ciphers = openssl_get_cipher_methods();
echo '<pre>';
print_r($ciphers);
echo '</ul>';
?>
	</section>
</div>
<?php include 'footer.php';?>
