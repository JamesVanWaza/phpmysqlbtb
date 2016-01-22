<?php include 'nav-admin.php';?>
	<h3>Cipher Methods</h3>
<?php
/** Gets the Cipher Methods */
$ciphers = openssl_get_cipher_methods();
echo '<pre>';
print_r($ciphers);
echo '</ul>';

include 'footer.php';
?>
