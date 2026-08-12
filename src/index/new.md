# new
``new`` creates a new object from a class. This operation is called the instantiation. 

The class must be available at instantiation call: the engine searches for it in the declared classes, then calls the autoloader to find it. In case no class is found, an error is emitted.

The instantiation immediately calls the constructor of the object: it is the method called ``__construct``.

The constructor defines how many arguments are needed. When no argument is needed, ``new`` may also be called without parentheses.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new.html","name":"new","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:32:11 +0000","dateModified":"Sat, 08 Aug 2026 14:32:11 +0000","description":"new creates a new object from a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"new"}]}]}</script>
```php
<?php

    class X {
        function __construct($a = 1) {}
    }
    
    // instantiation
    $x = new x($a);
    
    $y = new y;

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.new)**
## Related

+ [Chaining New Without Parenthesis](chaining-new-without-parenthesis.html)
+ [Dynamic Class](dynamic-class.html)
+ [New In Initializers](new-in-initializer.html)
+ [New Without Parenthesis](new-without-parenthesis.html)
+ [Reflection](reflection.html)
+ [instance](instance.html)
+ [Static Call](static-call.html)
