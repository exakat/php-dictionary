# HTTP Request Headers
HTTP request headers are sent by the client to the server at the start of an HTTP request. They carry metadata about the client, the requested resource, and the desired response format.

Request headers are available in the ``$_SERVER`` superglobal with the ``HTTP_`` prefix, e.g., ``$_SERVER['HTTP_ACCEPT']``, or through ``getallheaders()`` for the full list.

Common request headers include ``Accept``, ``Authorization``, ``Content-Type``, ``User-Agent``, and ``Cookie``.
```php
<?php

// Read a specific request header
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';

// Read all request headers
$requestHeaders = getallheaders();

foreach ($requestHeaders as $name => $value) {
    echo "$name: $value", PHP_EOL;
}

?>
```

Related : [HTTP Headers](HTTP Headers), [Hyper Text Transfer Protocol (HTTP)](Hyper Text Transfer Protocol (HTTP)), [Headers](Headers), [$_SERVER]($_SERVER), [HTTP Code](HTTP Code), [Redirect](Redirect), [Search Engine Optimization (SEO)](Search Engine Optimization (SEO))
