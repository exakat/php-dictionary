# serialize\_precision
The ``serialize_precision`` PHP ini directive controls the number of significant digits used when serializing float values via ``serialize()`` and ``json_encode()``.

Since PHP 7.1, the default is ``-1``, which uses the minimum number of digits needed to uniquely represent each float, ensuring round-trip fidelity. A positive integer value uses that many significant digits instead, which may introduce rounding.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/serialize_precision.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/serialize_precision.html","name":"serialize_precision","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:22:47 +0000","dateModified":"Mon, 06 Jul 2026 10:22:47 +0000","description":"The ``serialize_precision`` PHP ini directive controls the number of significant digits used when serializing float values via ``serialize()`` and ``json_encode()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/serialize_precision.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // With serialize_precision = -1 (default since PHP 7.1)
    $value = 3.141592653589793;
    echo json_encode($value);
    // outputs: 3.141592653589793
    
    // With serialize_precision = 14
    // outputs: 3.1415926535898

?>
```

**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.serialize-precision)**
## See Also

+ [precision](https://www.php.net/manual/en/ini.core.php#ini.precision)

## Related

+ [Directives](directive.ini.html)
+ [Floating Point Numbers](float.ini.html)
+ [precision](precision.ini.html)
+ [Serialization](serialization.ini.html)
+ [SplSubject](splsubject.ini.html)
