<?php include 'nav-admin.php';?>
<div class="row">
	<div class="small-12 columns">
	<h3>Cipher Methods</h3>
<?php
/** Gets the Cipher Methods */
$ciphers = openssl_get_cipher_methods();
echo '<pre>';
print_r($ciphers);
echo '</ul>';
?>
	</div>
</div>
<?php include 'footer.php';?>