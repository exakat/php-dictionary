# Named Type
A named type is a type with a single name. This means native types, such as ``never``, ``int`` or ``array`` and custom types, such as classes and interfaces. It actually exclude constructed types, such as union types and intersection types. And DNF is included in union types.

Named types have a related Reflection class: ``ReflectionNamedType``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/named-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/named-type.html","name":"Named Type","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 22 Aug 2026 08:06:23 +0000","dateModified":"Sat, 22 Aug 2026 08:06:23 +0000","description":"A named type is a type with a single name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/named-type.html"]}],"keywords":["type"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/union-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intersection-type.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.declarations.php"},{"@type":"CreativeWork","name":"Union Types vs. Intersection Types | PHPStan","url":"https:\/\/phpstan.org\/blog\/union-types-vs-intersection-types"},{"@type":"CreativeWork","name":"PHP: Type System - Manual","url":"https:\/\/www.php.net\/manual\/en\/language.types.type-system.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"named-type"}]}]}</script>
```php
<?php

    function foo(A $a) : void {}

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.declarations.php)**
## See Also

+ [Union Types vs. Intersection Types | PHPStan](https://phpstan.org/blog/union-types-vs-intersection-types)
+ [PHP: Type System - Manual](https://www.php.net/manual/en/language.types.type-system.php)

## Related

+ [Name](name.html)
+ [Union Type](union-type.html)
+ [Intersection Type](intersection-type.html)
