# php://output
``php://output`` is a special write-only stream that gives access to the body of the outgoing HTTP response. It does not work with CLI environment.

``php://output`` is also implicitly written when using ``echo``, ``print``, the HTML mode, or ``print_r()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-output.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-output.html","name":"php:\/\/output","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:50:37 +0000","dateModified":"Tue, 11 Aug 2026 20:50:37 +0000","description":"php:\/\/output is a special write-only stream that gives access to the body of the outgoing HTTP response","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php:\/\/output.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"php-output"}]}]}</script>
```php
<?php

    $incoming = file_put_contents('php://output', '<p>hello world</p>');

?>
```

**[Documentation](https://www.php.net/manual/en/wrappers.php.php)**
## See Also

+ [PHP Output Buffering for dummies](https://medium.com/@eric.morand/php-output-buffering-for-dummies-fad9624554b4)

## Related

+ [Hyper Text Transfer Protocol (HTTP)](http.html)
+ [Stream](stream.html)
+ [Echo](echo.html)
+ [Print](print.html)
+ [php://input](php-input.html)
+ [file\_put\_contents()](file_put_contents.html)
+ [$HTTP\_RAW\_POST\_DATA]($HTTP_RAW_POST_DATA.html)
