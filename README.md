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
// get Array result
$instadl->download('YOUR_INSTAGRAM_POST_URL');
print_r($instadl->getArray());
```

### How Get Api Key?
Please submit request to [Request Key](https://api.bayyu.net/contact)
