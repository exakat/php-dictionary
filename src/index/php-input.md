# php://input
``php://input`` is a special read-only stream that gives access the raw body of an incoming HTTP request. It does not work with CLI environment.

When a browser sends data to the web server, PHP parses it into superglobals like ``$_POST``. But sometimes the exact raw payload is needed: that's where ``php://input`` comes in.

The raw data used to be accessed via ``$HTTP_RAW_POST_DATA``, but this is a deprecated feature.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-input.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-input.html","name":"php:\/\/input","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"php:\/\/input is a special read-only stream that gives access the raw body of an incoming HTTP request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php:\/\/input.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"php-input"}]}]}</script>
```php
<?php

    $incoming = file_get_contents('php://input');

?>
```

**[Documentation](https://www.php.net/manual/en/wrappers.php.php)**
## See Also

+ [How to receive JSON POST with PHP ?](https://www.geeksforgeeks.org/php/how-to-receive-json-post-with-php/)

## Related

+ [Hyper Text Transfer Protocol (HTTP)](http.html)
+ [Stream](stream.html)
+ [file\_get\_contents()](file_get_contents.html)
+ [$HTTP\_RAW\_POST\_DATA]($HTTP_RAW_POST_DATA.html)
+ [php://output](php-output.html)
