# Overflow
Overflow happens when a value goes beyond a limit: out of its range of existence, the behavior of the value is now unknown.

Overflow happens with integers, limited to ``PHP_INT_MAX`` and ``PHP_INT_MIN``, floats ``PHP_FLOAT_MAX`` and ``PHP_FLOAT_MIN``. 

Other situations, such as accessing an array element or a string character beyond its last element, defaults to returning ``null``.

There is a native class called ``OverflowException``, which is emitted when a number gets too large, and may be caught.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overflow.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overflow.html","name":"Overflow","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 12:01:12 +0000","dateModified":"Sun, 09 Aug 2026 12:01:12 +0000","description":"Overflow happens when a value goes beyond a limit: out of its range of existence, the behavior of the value is now unknown","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overflow.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/null.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rangeexception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/underflow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overflowexception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/edge-case.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Integer_overflow"},{"@type":"CreativeWork","name":"Integers","url":"https:\/\/www.php.net\/manual\/en\/language.types.integer.php"},{"@type":"CreativeWork","name":"How PHP Decides an Integer Is Too Big \u2014 Float Coercion and the Silent Overflow","url":"https:\/\/medium.com\/@annxsa\/how-php-decides-an-integer-is-too-big-float-coercion-and-the-silent-overflow-e14845e15f02"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"overflow"}]}]}</script>
```php
<?php

    $a = PHP_INT_MAX;
    $b = (int) ($a +  1);
    
    echo $a.PHP_EOL;
    echo $b;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Integer_overflow)**
## See Also

+ [Integers](https://www.php.net/manual/en/language.types.integer.php)
+ [How PHP Decides an Integer Is Too Big — Float Coercion and the Silent Overflow](https://medium.com/@annxsa/how-php-decides-an-integer-is-too-big-float-coercion-and-the-silent-overflow-e14845e15f02)

## Related

+ [Null](null.html)
+ [RangeException](rangeexception.html)
+ [Underflow](underflow.html)
+ [OverflowException](overflowexception.html)
+ [Standard PHP Library (SPL)](spl.html)
+ [Edge Case](edge-case.html)
