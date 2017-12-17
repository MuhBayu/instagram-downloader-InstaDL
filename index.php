<?php
@require('lib/instadl.lib.php');

$instadl = new InstaDL();
$instadl->setApiKey('YOUR_API_KEY');
$instadl->download('YOUR_INSTAGRAM_POST_URL');

//* get JSON result
$getJson = $instadl->get();

//* get Array result
$getArr = $instadl->getArray();

?>
