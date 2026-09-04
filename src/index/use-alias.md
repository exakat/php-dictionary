# Use Alias
The ``use`` operator can create aliases for a class, function or constant. After the declaration of the alias, it is possible to use the original class with the alias name. 

With PHP fallback mechanism, it is possible to declare locally a function with the name of a native PHP function. This is useful to mock such functions.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use-alias.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use-alias.html","name":"Use Alias","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 16:53:53 +0000","dateModified":"Mon, 10 Aug 2026 16:53:53 +0000","description":"The use operator can create aliases for a class, function or constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use-alias.html"]}],"keywords":["use"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/alias.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/as.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace-alias.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mock.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collision.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global-space.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.importing.php"},{"@type":"CreativeWork","name":"class_alias","url":"https:\/\/www.php.net\/manual\/en\/function.class-alias.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"use-alias"}]}]}</script>
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
## See Also

+ [class_alias](https://www.php.net/manual/en/function.class-alias.php)

## Related

+ [Alias](alias.html)
+ [As](as.html)
+ [Namespace Alias](namespace-alias.html)
+ [Namespaces](namespace.html)
+ [Use](use.html)
+ [Mock](mock.html)
+ [Collision](collision.html)
+ [Global Space](global-space.html)
