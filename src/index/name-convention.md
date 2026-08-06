# Name Conventions
A naming convention is a way to write a name for a structure, with a specific format.

There are technical conventions, which leads the PHP engine to refuse a name, such as starting a class name with a number.

There are developer conventions, which are a community practice, that fits within the technical conventions. For example, constants are written in upper case.

Here are technical conventions for PHP: 

+ Variables, properties: they start with a ``$`` sign, followed by a letter or underscore, then by letters, digits and underscore. There have no length limit. As a regex: ``$[a-zA-Z_][a-zA-Z0-9_]*``
+ Functions, methods: they start with a letter or underscore, then by letters, digits and underscore. There have no length limit. As a regex: ``[a-zA-Z_][a-zA-Z0-9_]*``
+ Classes, traits, enumerations, interfaces: they start with a letter or underscore, then by letters, digits and underscore. There have no length limit. As a regex: ``[a-zA-Z_][a-zA-Z0-9_]*``
+ Constants, global or class: they start with a letter or underscore, then by letters, digits and underscore. There have no length limit. As a regex: ``[a-zA-Z_][a-zA-Z0-9_]*``
+ Array index: they must be valid strings or integers. 


<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/name-convention.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/name-convention.html","name":"Name Conventions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A naming convention is a way to write a name for a structure, with a specific format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Name Conventions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // here, foo is the name of a function
    function foo() {}
    
    // the name is used to call the function
    foo();

?>
```

**[Documentation](https://www.php.net/manual/en/language.variables.basics.php)**
## Related

+ [Namespaces](namespace.ini.html)
+ [Anonymous](anonymous.ini.html)
+ [Case Sensitivity](case-sensitivity.ini.html)
+ [Namespace Name](namespace-name.ini.html)
+ [Structure](structure.ini.html)
+ [Word Combination](word-combinaison.ini.html)
+ [Close Naming](close-naming.ini.html)
+ [Naming Conflict](naming-conflict.ini.html)
+ [Reserved Names](reserved-name.ini.html)
+ [Semantics](semantics.ini.html)
+ [Static Constant](class-constant.ini.html)
