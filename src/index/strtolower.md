# strtolower()
``strtolower()`` converts all ASCII alphabetic characters in a string to lowercase.

It only handles the 26 ASCII letters, from ``A`` to ``Z``. Characters outside the ASCII range, such as accented letters or characters from non-Latin scripts, are not converted. For Unicode-aware lowercasing, use ``mb_strtolower()``, which respects the encoding of the string.

``strtolower()`` is commonly used when comparing strings in a case-insensitive manner, building slugs, or normalising input.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strtolower.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strtolower.html","name":"strtolower()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:16:07 +0000","dateModified":"Fri, 10 Jul 2026 09:16:07 +0000","description":"strtolower() converts all ASCII alphabetic characters in a string to lowercase","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strtolower().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"strtolower"}]}]}</script>
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

+ [strtoupper()](strtoupper.html)
+ [String](string.html)
+ [Case Sensitivity](case-insensitive.html)
+ [Slug](slug.html)
+ [Multibyte String](mbstring.html)
+ [Idempotent](idempotent.html)
+ [setlocale](setlocale.html)
