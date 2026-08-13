# abs()
``abs()`` calculates the absolute value of a number. It is the value itself, when the number is positive or zero, and it is the opposite of the number when the number is negative.

Almost all integers have an absolute value: the only exception is ``PHP_INT_MIN``. Its value is ``-9223372036854775808``, and the actual absolute value would be ``9223372036854775808``, which is bigger than ``PHP_INT_MAX``. 

``abs()`` takes ``float`` and ``int`` as types. Except for the exception above, giving a float to ``abs()`` produces a float, and giving it an integer, produces an integer. Other types are forbidden. Objects have to be turned explicitly into a number.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abs.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abs.html","name":"abs()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 21:02:33 +0000","dateModified":"Tue, 11 Aug 2026 21:02:33 +0000","description":"abs() calculates the absolute value of a number","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abs().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"abs"}]}]}</script>
```php
<?php

    $a = -2;
    print abs($a); // 2
    print abs(abs($a)); // 2

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Absolute_value)**
## Related

+ [Floating Point Numbers](float.html)
+ [integer](integer.html)
+ [Number](number.html)
+ [Absolute](absolute.html)
