# Underflow
Underflow happens when a value goes below a limit: out of its range of existence, the behavior of the value is now unknown.

Underflow happens with integers, which are limited from ``PHP_INT_MIN`` to ``PHP_INT_MIN``, floats, which are limited from ``PHP_FLOAT_MIN`` to ``PHP_FLOAT_MAX``. 

Other situations, such as accessing an array element or a string character beyond its first element, defaults to returning ``null``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/underflow.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/underflow.html","name":"Underflow","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Underflow happens when a value goes below a limit: out of its range of existence, the behavior of the value is now unknown","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/underflow.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/null.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overflow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rangeexception.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Arithmetic_underflow"},{"@type":"CreativeWork","name":"PHP-FPM Underflow RCE","url":"https:\/\/www.rapid7.com\/db\/modules\/exploit\/multi\/http\/php_fpm_rce\/"},{"@type":"CreativeWork","name":"Integer Underflow","url":"https:\/\/secdim.com\/lab\/integer-underflow\/php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"underflow"}]}]}</script>
```php
<?php

    $a = PHP_INT_MAX;
    $b = (int) ($a +  1);
    
    echo $a.PHP_EOL;
    echo $b;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Arithmetic_underflow)**
## See Also

+ [PHP-FPM Underflow RCE](https://www.rapid7.com/db/modules/exploit/multi/http/php_fpm_rce/)
+ [Integer Underflow](https://secdim.com/lab/integer-underflow/php/)

## Related

+ [Null](null.html)
+ [Overflow](overflow.html)
+ [RangeException](rangeexception.html)
