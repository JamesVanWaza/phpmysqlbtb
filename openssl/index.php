<?php include 'nav.php';?>
<div class="row">
	<section class="small-12 columns">
		<h1>OpenSSL</h1>
		<h2>Finding the current version of OpenSSL on a server</h2>
<?php
echo "<span class='echospan'>Current Version: </span>" . OPENSSL_VERSION_TEXT . "<br>";
echo "<span class='echospan'>Current Version Number: </span>" . OPENSSL_VERSION_NUMBER;
?>
		<br>
		<a href="https://www.digicert.com/ssl-certificate-country-codes.htm" target="_blank">List of country codes <i class="fa fa-external-link" aria-hidden="true"></i></a>
		<h3>Creating a self signed certificate</h3>
		See example below
<hr>
<?php
/**
 * Fill in data for the distinguished name to be used in the cert
 * You must change the values of these keys to match your name and company, or more precisely,
 * the name and company of the person/site that you are generating the certificate for.
 * For SSL certificates, the commonName is usually the domain name that will be using the
 * certificate, but for S/MIME certificates, the commonName will be the name of the individual
 * who will use the certficate.
 */
$dn = array(
	"countryName" => "US",
	"stateOrProvinceName" => "Maryland",
	"localityName" => "Rockville",
	"organizationName" => "Dosbranding INC",
	"organizationalUnitName" => "Creative Agency",
	"commonName" => "Dosbranding",
	"emailAddress" => "info@dosbranding.com",
);

/** Generate a new private (and public) key pair */
$privkey = openssl_pkey_new();

/** Generate a certificate signing request */
$csr = openssl_csr_new($dn, $privkey);

/**
 * You will usually want to create a self-signed certificate at this point until your CA fulfils
 * your request.
 * This creates a self-signed cert that is valid for 365 days
 */
$sslcert = openssl_csr_sign($csr, null, $privkey, 365);

/**
 * Now you will want to preserve your private key, CSR and self-signed cert so that they can be
 * installed into your web server, mail server or mail client (depending on the intended use of the
 * certificate).
 * This example shows how to get those things into variables, but you can also store them directly into
 * files.
 * Typically, you will send the CSR on to your CA who will then issue with the "real" ceritificate.
 */
openssl_csr_export($csr, $csrout) and var_dump($csrout);
//openssl_x509_export($sscert, $certout) and var_dump($certout);
openssl_pkey_export($privkey, $pkeyout, "mypassword") and var_dump($pkeyout);

/** Show any errors that occured here */
while (($e = openssl_error_string()) !== false) {
	echo $e . "\n";
}
?>
	<hr>
	</section>
</div>

<?php include 'footer.php';?>
