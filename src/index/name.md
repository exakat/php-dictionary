# Name
A name is a generic coding concept: it is a short and human handle to designate a larger or variable structure. 

PHP assigns names to many coding structures: variables, constants, functions, classes, interfaces, traits, enumerations, methods, properties, goto labels. Most of these have also an anonymous version, where the same structure may be created without a name. 

Names usually require to be unique within a piece of code: this is the case for structures which have a definition, such as a class or a function. To avoid such conflict, it is recommended to use namespaces.

PHP are famously very flexible with names: they usually accept a letter, underscore as first element, then letters, numbers and underscores, as much as needed. They also accept any unicode above code 127, or 0x80, which means that emojis, characters, symbols and many languages are usable as part of a name.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name.html","name":"Name","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A name is a generic coding concept: it is a short and human handle to designate a larger or variable structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name.html"]}],"keywords":["concept","name","semantics","readability"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/case-sensitivity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/structure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/word-combinaison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/close-naming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/naming-conflict.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reserved-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semantics.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.php"},{"@type":"CreativeWork","name":"When PHP Meet Unicode: A Tour of Identifiers Beyond ASCII","url":"https:\/\/www.exakat.io\/when-php-meet-unicode-a-tour-of-identifiers-beyond-ascii\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"name"}]}]}</script>
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
