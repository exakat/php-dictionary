# Overflow
Overflow happens when a value goes beyond a limit: out of its range of existence, the behavior of the value is now unknown.

Overflow happens with integers, limited to ``PHP_INT_MAX`` and ``PHP_INT_MIN``, floats ``PHP_FLOAT_MAX`` and ``PHP_FLOAT_MIN``. 

Other situations, such as accessing an array element or a string character beyond its last element, defaults to returning ``null``.

There is a native class called ``OverflowException``, which is emitted when a number gets too large, and may be caught.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overflow.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overflow.html","name":"Overflow","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 09:44:41 +0000","dateModified":"Fri, 07 Aug 2026 09:44:41 +0000","description":"Overflow happens when a value goes beyond a limit: out of its range of existence, the behavior of the value is now unknown","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Overflow.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Overflow"}]}]}</script>
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

+ [PHP: Integers - Manual](https://www.php.net/manual/en/language.types.integer.php)
+ [How PHP Decides an Integer Is Too Big — Float Coercion and the Silent Overflow](https://medium.com/@annxsa/how-php-decides-an-integer-is-too-big-float-coercion-and-the-silent-overflow-e14845e15f02)

## Related

+ [Null](null.html)
+ [RangeException](rangeexception.html)
+ [Underflow](underflow.html)
+ [OverflowException](overflowexception.html)
+ [Standard PHP Library (SPL)](spl.html)
+ [Edge Case](edge-case.html)
