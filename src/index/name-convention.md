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


<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name-convention.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name-convention.html","name":"Name Conventions","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:46:09 +0000","dateModified":"Sun, 16 Aug 2026 07:46:09 +0000","description":"A naming convention is a way to write a name for a structure, with a specific format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Name Conventions.html"]}],"alternateName":["naming-convention"],"keywords":["concept","name"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/case-sensitivity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/structure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/word-combinaison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/close-naming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/naming-conflict.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reserved-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semantics.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.variables.basics.php"},{"@type":"CreativeWork","name":"Naming convention (programming) (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Naming_convention_(programming)"},{"@type":"CreativeWork","name":"PSR-1: Basic Coding Standard","url":"https:\/\/www.php-fig.org\/psr\/psr-1\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"name-convention"}]}]}</script>
```php
<?php

    // here, foo is the name of a function
    function foo() {}
    
    // the name is used to call the function
    foo();

?>
```

**[Documentation](https://www.php.net/manual/en/language.variables.basics.php)**
## See Also

+ [Naming convention (programming) (Wikipedia)](https://en.wikipedia.org/wiki/Naming_convention_(programming))
+ [PSR-1: Basic Coding Standard](https://www.php-fig.org/psr/psr-1/)

## Related

+ [Namespaces](namespace.html)
+ [Anonymous](anonymous.html)
+ [Case Sensitivity](case-sensitivity.html)
+ [Namespace Name](namespace-name.html)
+ [Structure](structure.html)
+ [Word Combination](word-combinaison.html)
+ [Close Naming](close-naming.html)
+ [Naming Conflict](naming-conflict.html)
+ [Reserved Names](reserved-name.html)
+ [Semantics](semantics.html)
+ [Static Constant](class-constant.html)
