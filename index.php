<?php
@require('lib/instadl.lib.php');

$instadl = new InstaDL();
$instadl->setApiKey('120500');
$instadl->download('https://www.instagram.com/p/Bcybe6mBpSs/');

//* get JSON result
$getJson = $instadl->get();

//* get Array result
$getArr = $instadl->getArray();

?>