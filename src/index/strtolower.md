# strtolower()
``strtolower()`` converts all ASCII alphabetic characters in a string to lowercase.

It only handles the 26 ASCII letters, from ``A`` to ``Z``. Characters outside the ASCII range, such as accented letters or characters from non-Latin scripts, are not converted. For Unicode-aware lowercasing, use ``mb_strtolower()``, which respects the encoding of the string.

``strtolower()`` is commonly used when comparing strings in a case-insensitive manner, building slugs, or normalising input.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/strtolower.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/strtolower.html","name":"strtolower()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:16:07 +0000","dateModified":"Fri, 10 Jul 2026 09:16:07 +0000","description":"``strtolower()`` converts all ASCII alphabetic characters in a string to lowercase","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/strtolower().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    echo strtolower('Hello World');  // hello world
    echo strtolower('PHP 8.4');      // php 8.4

    // Unicode-aware version
    echo mb_strtolower('Héllo', 'UTF-8'); // héllo

?>
```

**[Documentation](https://www.php.net/manual/en/function.strtolower.php)**
## See Also

+ [PHP strtoupper() and strtolower() Functions: A Complete Guide](https://reintech.io/blog/php-strtoupper-strtolower-functions-complete-guide)

## Related

+ [strtoupper()](strtoupper.ini.html)
+ [String](string.ini.html)
+ [Case Sensitivity](case-insensitive.ini.html)
+ [Slug](slug.ini.html)
+ [Multibyte String](mbstring.ini.html)
+ [Idempotent](idempotent.ini.html)
+ [setlocale](setlocale.ini.html)
