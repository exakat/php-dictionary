# HTTP Request Headers
HTTP request headers are sent by the client to the server at the start of an HTTP request. They carry metadata about the client, the requested resource, and the desired response format.

Request headers are available in the ``$_SERVER`` superglobal with the ``HTTP_`` prefix, e.g., ``$_SERVER['HTTP_ACCEPT']``, or through ``getallheaders()`` for the full list.

Common request headers include ``Accept``, ``Authorization``, ``Content-Type``, ``User-Agent``, and ``Cookie``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/http-headers.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/http-headers.ini.html","name":"HTTP Request Headers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 17 Jun 2026 16:10:16 +0000","dateModified":"Wed, 17 Jun 2026 16:10:16 +0000","description":"HTTP request headers are sent by the client to the server at the start of an HTTP request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/HTTP Request Headers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/function.getallheaders.php)**
## Related

+ [HTTP Headers](http-header.ini.html)
+ [Hyper Text Transfer Protocol (HTTP)](http.ini.html)
+ [Headers](headers.ini.html)
+ [$\_SERVER]($_server.ini.html)
+ [HTTP Code](http-code.ini.html)
+ [Redirect](redirect.ini.html)
+ [Search Engine Optimization (SEO)](seo.ini.html)
