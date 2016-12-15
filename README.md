Url Safe Base64
===============

Simple library for url safe base64 manipulations

Installation
------------

Installation is best managed via [Composer](https://getcomposer.org/).

```json
{
    "require": {
        "jigius/url-safe-base64": "1.0.*"
    }
}
```

Or:

```
composer require jigius/url-safe-base64=1.0.*
```

Usage
-----

```php
<?php

$encoded = \Jigius\UrlSafeBase64\Assets::encode("Hello world.");

echo \Jigius\UrlSafeBase64\Assets::decode($encoded);
```

Methods
-------

- string \Jigius\UrlSafeBase64\Assets::encode( string $string )
- string \Jigius\UrlSafeBase64\Assets::decode( string $string )
