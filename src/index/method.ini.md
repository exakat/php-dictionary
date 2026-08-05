# Method
Methods are functions, dedicated to a class. They are defined inside the body of a class, and may only be accessed in relation to that class: via an object, the class name or another method.

Methods are defined in traits, and then imported in a class for usage.

Methods are also called member functions. Indeed, they are functions, but they belong to an object, just like a member, or property. This is less used.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/method.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/method.ini.html","name":"Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Methods are functions, dedicated to a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Class](class.ini.html)
+ [\_\_call() Method](__call.ini.html)
+ [Default Parameter](default-parameter.ini.html)
+ [Fossilized Methods](fossilized-method.ini.html)
+ [Functions](function.ini.html)
+ [Properties](property.ini.html)
+ [Return](return.ini.html)
+ [Static Method](static-method.ini.html)
+ [Visibility](visibility.ini.html)
+ [Call Graph](call-graph.ini.html)
+ [Callbacks](callback.ini.html)
+ [Impure Function](impure-function.ini.html)
+ [Method Compatibility](method-compatibility.ini.html)
+ [Pure Function](pure-function.ini.html)
+ [Trait](trait.ini.html)
+ [Method Collision](method-collision.ini.html)
+ [Non-static](non-static.ini.html)
+ [Relay Function](relay-function.ini.html)
