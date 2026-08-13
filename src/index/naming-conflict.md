# Naming Conflict
A naming conflict appears when two structures of the same type are using the same name.

This may lead to a fatal error, when the first defined structure has priority: this happens with functions, classes, etc.

It may also lead to overwriting, when the last structure can overwrite the first one. This approach is often silently executed, leading to late surprises. This is the case with array indices, variables, methods in class hierarchies, or arguments, in older versions of PHP.

Sometimes, PHP offers a mechanism to resolve conflicts. This is the case for methods in traits.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/naming-conflict.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/naming-conflict.html","name":"Naming Conflict","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:06:00 +0000","dateModified":"Mon, 20 Jul 2026 17:06:00 +0000","description":"A naming conflict appears when two structures of the same type are using the same name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Naming Conflict.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"naming-conflict"}]}]}</script>
```php
<?php

    $a = 1;
    $a = 2; // $a is two, the first one is forgotten
    
    function foo() {}
    function foo() {} // Fatal error

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.php)**
## Related

+ [Name](name.html)
+ [Functions](function.html)
+ [Class](class.html)
+ [Namespaces](namespace.html)
+ [Name Conventions](name-convention.html)
