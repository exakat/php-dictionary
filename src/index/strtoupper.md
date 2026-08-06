# strtoupper()
``strtoupper()`` converts all ASCII alphabetic characters in a string to uppercase.

It only handles the 26 ASCII letters, from ``a`` to ``z``. Characters outside the ASCII range are not converted. For Unicode-aware uppercasing, use ``mb_strtoupper()``, which respects the string encoding.

``strtoupper()`` is used for display normalisation, case-insensitive comparisons, and formatting constants or labels.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/strtoupper.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/strtoupper.html","name":"strtoupper()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:16:25 +0000","dateModified":"Fri, 10 Jul 2026 09:16:25 +0000","description":"``strtoupper()`` converts all ASCII alphabetic characters in a string to uppercase","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/strtoupper().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    echo strtoupper('hello world');  // HELLO WORLD
    echo strtoupper('php 8.4');      // PHP 8.4

    // Unicode-aware version
    echo mb_strtoupper('héllo', 'UTF-8'); // HÉLLO

?>
```

**[Documentation](https://www.php.net/manual/en/function.strtoupper.php)**
## See Also

+ [PHP strtoupper() and strtolower() Functions: A Complete Guide](https://reintech.io/blog/php-strtoupper-strtolower-functions-complete-guide)

## Related

+ [strtolower()](strtolower.ini.html)
+ [String](string.ini.html)
+ [Case Sensitivity](case-insensitive.ini.html)
+ [Multibyte String](mbstring.ini.html)
+ [setlocale](setlocale.ini.html)
