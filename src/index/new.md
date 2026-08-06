# new
``new`` creates a new object from a class. This operation is called the instantiation. 

The class must be available at instantiation call: the engine searches for it in the declared classes, then calls the autoloader to find it. In case no class is found, an error is emitted.

The instantiation calls immediatly the constructor of the object: it is the method called ``__construct``. 

The constructor defines how many arguments are needed. When no argument is needed, ``new`` may also be called without parenthesis.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/new.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/new.html","name":"new","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``new`` creates a new object from a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/new.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Chaining New Without Parenthesis](chaining-new-without-parenthesis.ini.html)
+ [Dynamic Class](dynamic-class.ini.html)
+ [New In Initializers](new-in-initializer.ini.html)
+ [New Without Parenthesis](new-without-parenthesis.ini.html)
+ [Reflection](reflection.ini.html)
+ [instance](instance.ini.html)
+ [Static Call](static-call.ini.html)
