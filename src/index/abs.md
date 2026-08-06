# abs()
``abs()`` calculates the absolute value of a number. It is the value itself, when the number is positive or zero, and it is the opposite of the number when the number is negative.

Almost all integers have an absolute value: the only exception is ``PHP_INT_MIN``. Its value is ``-9223372036854775808``, and the actual absolute value would be ``9223372036854775808``, which is bigger than ``PHP_INT_MAX``. 

``abs()`` takes ``float`` and ``int`` as types. Except for the exception above, giving a float to ``abs()`` produces a float, and giving it an integer, produces an integer. Other types are forbidden. Object have to be turned explicitly into a number.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/abs.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/abs.html","name":"abs()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``abs()`` calculates the absolute value of a number","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/abs().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = -2;
    print abs($a); // 2
    print abs(abs($a)); // 2

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Absolute_value)**
## Related

+ [Floating Point Numbers](float.ini.html)
+ [integer](integer.ini.html)
+ [Number](number.ini.html)
+ [Absolute](absolute.ini.html)
