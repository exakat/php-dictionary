# Headers
Headers are HTTP response data sent to the client before any body output. PHP provides several built-in functions to manage them.

The native function ``header()`` sends a raw HTTP header. ``headers_sent()`` checks whether headers have already been sent. ``headers_list()`` returns the list of headers ready to be sent. ``header_remove()`` removes a previously set header.

Headers must be sent before any output, HTML, whitespace, or ``echo``. Sending output before calling ``header()`` triggers a PHP warning.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/headers.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/headers.html","name":"Headers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:50:38 +0000","dateModified":"Thu, 06 Aug 2026 05:50:38 +0000","description":"Headers are HTTP response data sent to the client before any body output","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Headers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

header('Content-Type: application/json');
header('X-Custom-Header: value');

if (headers_sent($file, $line)) {
    echo "Headers already sent in $file on line $line";
}

echo json_encode(['status' => 'ok']);

?>
```

**[Documentation](https://www.php.net/manual/en/function.header.php)**
## See Also

+ [Response header](https://developer.mozilla.org/en-US/docs/Glossary/Response_header)

## Related

+ [HTTP Headers](http-header.ini.html)
+ [Hyper Text Transfer Protocol (HTTP)](http.ini.html)
+ [Cookie](cookie.ini.html)
+ [HTTP Request Headers](http-headers.ini.html)
+ [Output Buffering](output-buffering.ini.html)
