## Instagram Downloader (InstaDL)

### Setup API
```php
require('lib/instadl.lib.php');
$instadl = new InstaDL();
```

### Setting API Key
```php
$instadl->setApiKey('YOUR_API_KEY');
```

### Get Data
Get JSON result
```php
// get Json result
$instadl->download('YOUR_INSTAGRAM_POST_URL');
echo $instadl->get();
```

Get Array result
```php
$instadl->download('YOUR_INSTAGRAM_POST_URL');
print_r($instadl->getArray());
```