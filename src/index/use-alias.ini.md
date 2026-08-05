# Use Alias
The ``use`` operator can create aliases for a class, function or constant. After the declaration of the alias, it is possible to use the original class with the alias name. 

With PHP fallback mechanism, it is possible to declare locally a function with the name of a native PHP function. This is useful to mock such functions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/use-alias.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/use-alias.ini.html","name":"Use Alias","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``use`` operator can create aliases for a class, function or constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Use Alias.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

use A as B;
use const C as D;
use function foo as strtlower; // very confusing


class A {}

new A;
new B;

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.importing.php)**
## Related

+ [Alias](alias.ini.html)
+ [As](as.ini.html)
+ [Namespace Alias](namespace-alias.ini.html)
+ [Namespaces](namespace.ini.html)
+ [Use](use.ini.html)
+ [Mock](mock.ini.html)
+ [Collision](collision.ini.html)
+ [Global Space](global-space.ini.html)
