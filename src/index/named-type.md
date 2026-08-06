# Named Type
A named type is a type with a single name. This means native types, such as ``never``, ``int`` or ``array`` and custom types, such as classes and interfaces. It actually exclude constructed types, such as union types and intersection types. And DNF is included in union types.

Named types have a related Reflection class: ``ReflectionNamedType``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/named-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/named-type.html","name":"Named Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:09:08 +0000","dateModified":"Mon, 20 Jul 2026 17:09:08 +0000","description":"A named type is a type with a single name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Named Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function foo(A $a) : void {}

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.declarations.php)**
## Related

+ [Name](name.ini.html)
+ [Union Type](union-type.ini.html)
+ [Intersection Type](intersection-type.ini.html)
