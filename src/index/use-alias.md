# Use Alias
The ``use`` operator can create aliases for a class, function or constant. After the declaration of the alias, it is possible to use the original class with the alias name. 

With PHP fallback mechanism, it is possible to declare locally a function with the name of a native PHP function. This is useful to mock such functions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use-alias.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use-alias.html","name":"Use Alias","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``use`` operator can create aliases for a class, function or constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Use Alias.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Use Alias"}]}]}</script>
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

+ [Alias](alias.html)
+ [As](as.html)
+ [Namespace Alias](namespace-alias.html)
+ [Namespaces](namespace.html)
+ [Use](use.html)
+ [Mock](mock.html)
+ [Collision](collision.html)
+ [Global Space](global-space.html)
