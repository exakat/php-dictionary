# HTTP Request Headers
HTTP request headers are sent by the client to the server at the start of an HTTP request. They carry metadata about the client, the requested resource, and the desired response format.

Request headers are available in the ``$_SERVER`` superglobal with the ``HTTP_`` prefix, e.g., ``$_SERVER['HTTP_ACCEPT']``, or through ``getallheaders()`` for the full list.

Common request headers include ``Accept``, ``Authorization``, ``Content-Type``, ``User-Agent``, and ``Cookie``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-headers.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-headers.html","name":"HTTP Request Headers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:50:47 +0000","dateModified":"Thu, 06 Aug 2026 05:50:47 +0000","description":"HTTP request headers are sent by the client to the server at the start of an HTTP request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/HTTP Request Headers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"HTTP Request Headers"}]}]}</script>
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
## See Also

+ [Request header](https://developer.mozilla.org/en-US/docs/Glossary/Request_header)

## Related

+ [HTTP Headers](http-header.html)
+ [Hyper Text Transfer Protocol (HTTP)](http.html)
+ [Headers](headers.html)
+ [$\_SERVER]($_server.html)
+ [HTTP Code](http-code.html)
+ [Redirect](redirect.html)
+ [Search Engine Optimization (SEO)](seo.html)
