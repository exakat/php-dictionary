# Method
Methods are functions, dedicated to a class. They are defined inside the body of a class, and may only be accessed in relation to that class: via an object, the class name or another method.

Methods are defined in traits, and then imported in a class for usage.

Methods are also called member functions. Indeed, they are functions, but they belong to an object, just like a member, or property. This is less used.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method.html","name":"Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Methods are functions, dedicated to a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Method.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"method"}]}]}</script>
```php
<?php

    class X {
        public function foo() {
            echo "I am foo!\n";
        }
    }
    
    $x = new Y();
    $y->foo(); // calling the foo method, defined in x,

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.properties-methods)**
## See Also

+ [PHP 8 – Functions and Methods](https://www.infoq.com/articles/php8-functions-methods/)

## Related

+ [Class](class.html)
+ [\_\_call() Method](__call.html)
+ [Default Parameter](default-parameter.html)
+ [Fossilized Methods](fossilized-method.html)
+ [Functions](function.html)
+ [Properties](property.html)
+ [Return](return.html)
+ [Static Method](static-method.html)
+ [Visibility](visibility.html)
+ [Call Graph](call-graph.html)
+ [Callbacks](callback.html)
+ [Impure Function](impure-function.html)
+ [Method Compatibility](method-compatibility.html)
+ [Pure Function](pure-function.html)
+ [Trait](trait.html)
+ [Method Collision](method-collision.html)
+ [Non-static](non-static.html)
+ [Relay Function](relay-function.html)
