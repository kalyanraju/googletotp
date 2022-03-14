<?php 
include_once 'vendor/sonata-project/google-authenticator/src/FixedBitNotation.php';
include_once 'vendor/sonata-project/google-authenticator/src/GoogleAuthenticatorInterface.php';
include_once 'vendor/sonata-project/google-authenticator/src/GoogleAuthenticator.php';
include_once 'vendor/sonata-project/google-authenticator/src/GoogleQrUrl.php';
 
$g = new \Google\Authenticator\GoogleAuthenticator();
$secret = 'XVQ2UIGO75XRUKJO';
//the "getUrl" method takes as a parameter: "username", "host" and the key "secret"
echo '<img src="'.$g->getURL('rafaelwendel', 'rafaelwendel.com', $secret).'" />';
 
?>