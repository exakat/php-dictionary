# serialize\_precision
The ``serialize_precision`` PHP ini directive controls the number of significant digits used when serializing float values via ``serialize()`` and ``json_encode()``.

Since PHP 7.1, the default is ``-1``, which uses the minimum number of digits needed to uniquely represent each float, ensuring round-trip fidelity. A positive integer value uses that many significant digits instead, which may introduce rounding.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serialize_precision.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serialize_precision.html","name":"serialize_precision","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:22:47 +0000","dateModified":"Mon, 06 Jul 2026 10:22:47 +0000","description":"The ``serialize_precision`` PHP ini directive controls the number of significant digits used when serializing float values via ``serialize()`` and ``json_encode()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serialize_precision.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"serialize_precision"}]}]}</script>
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

+ [Directives](directive.html)
+ [Floating Point Numbers](float.html)
+ [precision](precision.html)
+ [Serialization](serialization.html)
+ [SplSubject](splsubject.html)
