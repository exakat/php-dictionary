# Absolute Value
An ``absolute`` value is the positive value of a real number.

PHP offers the native function ``abs()`` to calculate this value.

The absolute value of ``PHP_INT_MIN`` is a float.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/absolute-value.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/absolute-value.html","name":"Absolute Value","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 05:04:01 +0000","dateModified":"Mon, 24 Aug 2026 05:04:01 +0000","description":"An absolute value is the positive value of a real number","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/absolute-value.html"]}],"keywords":["math"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fully-qualified-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/absolute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_int_min.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_int_max.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/abs"},{"@type":"CreativeWork","name":"Absolute value - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Absolute_value"},{"@type":"CreativeWork","name":"PHP abs Function: How to Get Absolute Values","url":"https:\/\/flatcoding.com\/tutorials\/php\/php-abs-function-how-to-get-absolute-values\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"absolute-value"}]}]}</script>
```php
<?php

    $a = 10;
    echo abs($a); // 10
    
    $b = -12;
    echo abs($b); // 12

?>
```

**[Documentation](https://www.php.net/abs)**
## See Also

+ [Absolute value - Wikipedia](https://en.wikipedia.org/wiki/Absolute_value)
+ [PHP abs Function: How to Get Absolute Values](https://flatcoding.com/tutorials/php/php-abs-function-how-to-get-absolute-values/)

## Related

+ [Fully Qualified Name](fully-qualified-name.html)
+ [Absolute](absolute.html)
+ [PHP\_INT\_MIN](php_int_min.html)
+ [PHP\_INT\_MAX](php_int_max.html)
