# precision
Precision refers to the number of digits that are used to represent and display floating-point numbers. The exact meaning depends a bit on the context, but it's most commonly about float accuracy and formatting.

Precision is important when using a decimal number as an array index: the conversion is implicit, and, nowadays, it yields a warning.

Precision is also lost when an integer is converted to a decimal number, which may not be accurately represented. This happens with large integers, when they are converted to float, because of their size.

``precision`` and ``serialize_precision`` are two PHP directives that control the display or conversion of numbers.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/precision.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/precision.html","name":"precision","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:40:35 +0000","dateModified":"Tue, 11 Aug 2026 14:40:35 +0000","description":"Precision refers to the number of digits that are used to represent and display floating-point numbers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/precision.html"]}],"keywords":["concept","decimal","directive"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_int_max.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_int_min.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serialize_precision.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.float.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"precision"}]}]}</script>
```php
<<?php

    echo 1 / 7;
    
    print PHP_EOL;
    
    ini_set('precision', 2);
    
    echo 1 / 7;

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.float.php)**
## Related

+ [integer](integer.html)
+ [Floating Point Numbers](float.html)
+ [PHP\_INT\_MAX](php_int_max.html)
+ [PHP\_INT\_MIN](php_int_min.html)
+ [serialize\_precision](serialize_precision.html)
