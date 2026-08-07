# Name
A name is a generic coding concept: it is a short and human handle to designate a larger or variable structure. 

PHP assigns names to many coding structures: variables, constants, functions, classes, interfaces, traits, enumerations, methods, properties, goto labels. Most of these have also an anonymous version, where the same structure may be created without a name. 

Names usually require to be unique within a piece of code: this is the case for structures which have a definition, such as a class or a function. To avoid such conflict, it is recommended to use namespaces.

PHP are famously very flexible with names: they usually accept a letter, underscore as first element, then letters, numbers and underscores, as much as needed. They also accept any unicode above code 127, or 0x80, which means that emojis, characters, symbols and many languages are usable as part of a name.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name.html","name":"Name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:11:31 +0000","dateModified":"Wed, 05 Aug 2026 08:11:31 +0000","description":"A name is a generic coding concept: it is a short and human handle to designate a larger or variable structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Name"}]}]}</script>
```php
<?php

    // here, foo is the name of a function
    function foo() {}
    
    // the name is used to call the function
    foo();

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.php)**
## See Also

+ [When PHP Meet Unicode: A Tour of Identifiers Beyond ASCII](https://www.exakat.io/when-php-meet-unicode-a-tour-of-identifiers-beyond-ascii/)

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
