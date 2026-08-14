# Class Constant Syntax
The class constant syntax is the full name of a class constant, formalized in a string. It is ``namespace\class-name::constant-name``.

That representation requires the name of the class to include the full namespace path, with or without the leading ``\``.

The class constant syntax does not work with local ``use`` expressions.

The class constant syntax works with the ``constant()`` and ``defined()`` functions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant-syntax.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant-syntax.html","name":"Class Constant Syntax","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:59:30 +0000","dateModified":"Tue, 11 Aug 2026 20:59:30 +0000","description":"The class constant syntax is the full name of a class constant, formalized in a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Class Constant Syntax.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"class-constant-syntax"}]}]}</script>
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

+ [Static Constant](class-constant.html)
+ [Constants](constant.html)
+ [defined()](defined.html)
+ [constant()](constant-function.html)
+ [Dynamic Constant](dynamic-constant.html)
