<?php include 'nav-admin.php';?>
	<h2>Cipher Methods</h2>
<?php
/** Gets the Cipher Methods */
$ciphers = openssl_get_cipher_methods();
echo '<pre>';
print_r($ciphers);
echo '</ul>';

include 'footer.php';
?>
