# Signed Integer
PHP integers are always signed. They use one bit to represent the sign, allowing both negative and positive values. PHP does not support unsigned integers.

On a 64-bit platform, a PHP integer spans from ``PHP_INT_MIN``, aka ``-9,223,372,036,854,775,808``, or -2^63 to ``PHP_INT_MAX``, aka ``9,223,372,036,854,775,807``, or 2^63 - 1. On a 32-bit platform, the range is -2^31 to 2^31 - 1.

When an operation would produce a value outside that range, PHP silently promotes the result to a ``float``, which has a larger range but reduced precision for large integers.

Languages such as C or Rust distinguish signed integers ``int``, ``i64`` from unsigned integers ``uint``, ``u64``. PHP makes no such distinction: all integers are signed.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/signed-integer.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/signed-integer.html","name":"Signed Integer","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 12:11:09 +0000","dateModified":"Sat, 15 Aug 2026 12:11:09 +0000","description":"PHP integers are always signed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Signed Integer.html"]}],"keywords":["integer","type","noSeeAlso"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sign.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/positive-integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_int_max.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_int_min.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overflow.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.integer.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"signed-integer"}]}]}</script>
```php
<?php

    $max = PHP_INT_MAX; // 9223372036854775807
    $min = PHP_INT_MIN; // -9223372036854775808
    
    // Overflow promotes to float silently
    $overflow = PHP_INT_MAX + 1; // float(9.2233720368548E+18)
    
    var_dump($overflow); // float, not integer

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.integer.php)**
## Related

+ [integer](integer.html)
+ [Sign](sign.html)
+ [Positive Integer](positive-integer.html)
+ [PHP\_INT\_MAX](php_int_max.html)
+ [PHP\_INT\_MIN](php_int_min.html)
+ [Floating Point Numbers](float.html)
+ [Overflow](overflow.html)
