# Naming Conflict
A naming conflict appears when two structures of the same type are using the same name.

This may lead to a fatal error, when the first defined structure has priority: this happens with functions, classes, etc.

It may also lead to overwriting, when the last structure can overwrite the first one. This approach is often silently executed, leading to late surprises. This is the case with array indices, variables, methods in class hierarchies, or arguments, in older versions of PHP.

Sometimes, PHP offers a mechanism to resolve conflicts. This is the case for methods in traits.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/naming-conflict.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/naming-conflict.ini.html","name":"Naming Conflict","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:06:00 +0000","dateModified":"Mon, 20 Jul 2026 17:06:00 +0000","description":"A naming conflict appears when two structures of the same type are using the same name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Naming Conflict.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Name](name.ini.html)
+ [Functions](function.ini.html)
+ [Class](class.ini.html)
+ [Namespaces](namespace.ini.html)
+ [Name Conventions](name-convention.ini.html)
