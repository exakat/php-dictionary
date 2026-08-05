# php://output
``php://output`` is a special write-only stream that gives access the body of the outgoing HTTP response. It does not work with CLI environment.

``php://output`` is also implicitly written when using ``echo``, ``print``, the HTML mode, or ``print_r()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php-output.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php-output.ini.html","name":"php:\/\/output","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``php:\/\/output`` is a special write-only stream that gives access the body of the outgoing HTTP response","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php:\/\/output.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $incoming = file_put_contents('php://output', '<p>hello world</p>');

?>
```

**[Documentation](https://www.php.net/manual/en/wrappers.php.php)**
## See Also

+ [PHP Output Buffering for dummies](https://medium.com/@eric.morand/php-output-buffering-for-dummies-fad9624554b4)

## Related

+ [Hyper Text Transfer Protocol (HTTP)](http.ini.html)
+ [Stream](stream.ini.html)
+ [Echo](echo.ini.html)
+ [Print](print.ini.html)
+ [php://input](php-input.ini.html)
+ [file\_put\_contents()](file_put_contents.ini.html)
+ [$HTTP\_RAW\_POST\_DATA]($HTTP_RAW_POST_DATA.ini.html)
