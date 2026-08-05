# Overflow
Overflow happens when a value goes beyond a limit: out of its range of existence, the behavior of the value is now unknown.

Overflow happens with integers, limited to ``PHP_INT_MAX`` and ``PHP_INT_MIN``, floats ``PHP_FLOAT_MAX`` and ``PHP_FLOAT_MIN``. 

Other situations, such as accessing an array element or a string character beyond its last element, defaults to returning ``null``.

There is a native class called ``OverflowException``, which is emitted when a number gets too large, and may be caught.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/overflow.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/overflow.ini.html","name":"Overflow","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:27:01 +0000","dateModified":"Fri, 19 Jun 2026 21:27:01 +0000","description":"Overflow happens when a value goes beyond a limit: out of its range of existence, the behavior of the value is now unknown","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Overflow.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = PHP_INT_MAX;
    $b = (int) ($a +  1);
    
    echo $a.PHP_EOL;
    echo $b;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Integer_overflow)**
## Related

+ [Null](null.ini.html)
+ [RangeException](rangeexception.ini.html)
+ [Underflow](underflow.ini.html)
+ [OverflowException](overflowexception.ini.html)
+ [Standard PHP Library (SPL)](spl.ini.html)
+ [Edge Case](edge-case.ini.html)
