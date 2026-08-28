# Naming Conflict
A naming conflict appears when two structures of the same type are using the same name.

This may lead to a fatal error, when the first defined structure has priority: this happens with functions, classes, etc.

It may also lead to overwriting, when the last structure can overwrite the first one. This approach is often silently executed, leading to late surprises. This is the case with array indices, variables, methods in class hierarchies, or arguments, in older versions of PHP.

Sometimes, PHP offers a mechanism to resolve conflicts. This is the case for methods in traits.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/naming-conflict.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/naming-conflict.html","name":"Naming Conflict","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 22 Aug 2026 08:06:29 +0000","dateModified":"Sat, 22 Aug 2026 08:06:29 +0000","description":"A naming conflict appears when two structures of the same type are using the same name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/naming-conflict.html"]}],"keywords":["conflict","name","_nocompileOK"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name-convention.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.php"},{"@type":"CreativeWork","name":"Global Namespace Collision Detection in PHP","url":"https:\/\/philsturgeon.com\/global-namespace-class-collisions-in-php\/"},{"@type":"CreativeWork","name":"Name collision - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Name_collision"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"naming-conflict"}]}]}</script>
```php
<?php

    $a = 1;
    $a = 2; // $a is two, the first one is forgotten
    
    function foo() {}
    function foo() {} // Fatal error

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.php)**
## See Also

+ [Global Namespace Collision Detection in PHP](https://philsturgeon.com/global-namespace-class-collisions-in-php/)
+ [Name collision - Wikipedia](https://en.wikipedia.org/wiki/Name_collision)

## Related

+ [Name](name.html)
+ [Functions](function.html)
+ [Class](class.html)
+ [Namespaces](namespace.html)
+ [Name Conventions](name-convention.html)
