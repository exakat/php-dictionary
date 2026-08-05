# Class Constant Syntax
The class constant syntax is the full name of a class constant, formalized in a string. It is ``namespace\class-name::constant-name``.

That representation requires the name of the class to be include the full namespace path, with or without the leading ``\``.

The class constant syntax does not work with local ``use`` expressions.

The class constant syntax works with the ``constant()`` and ``defined()`` functions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/class-constant-syntax.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/class-constant-syntax.ini.html","name":"Class Constant Syntax","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:56 +0000","dateModified":"Fri, 19 Jun 2026 21:25:56 +0000","description":"The class constant syntax is the full name of a class constant, formalized in a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Class Constant Syntax.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

namespace X\Y;

use A as D;

class A {
    const B = 'C';
}

echo constant('\X\Y\A::B');
echo constant('X\Y\A::B');
echo constant('D::B'); // error, no such class as D

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.constants.php)**
## Related

+ [Static Constant](class-constant.ini.html)
+ [Constants](constant.ini.html)
+ [defined()](defined.ini.html)
+ [constant()](constant-function.ini.html)
+ [Dynamic Constant](dynamic-constant.ini.html)
