# \_\_call() Method
``__call()`` is a magic method: it is called when a method cannot be accessed, either because it doesn't exist, or because its visibility prevents it.

That way, it is possible to create dynamically methods, without hardcoding them. 

The ``__call()`` method receives the name of the target-method, and a list of argument, as an array. 

The ``__call()`` method has a related version for static methods, called ``__callStatic()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__call.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__call.html","name":"__call() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:05:30 +0000","dateModified":"Mon, 06 Jul 2026 10:05:30 +0000","description":"``__call()`` is a magic method: it is called when a method cannot be accessed, either because it doesn't exist, or because its visibility prevents it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__call() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class x {
    private $values = ['a' => 1,
                       'b' => 2,
                       ];

    // Checks the dictionary, or return 0
    function __call($name, $args) {
        if (method_exists($this, $name)) {
            return $this->$name(...$args);
        }
        
        return 0;
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php)**
## See Also

+ [PHP _call (Lesson 3: PHP Magic Methods)](https://dev.to/cleancodestudio/php-call-lesson-3-php-magic-methods-5bi0)

## Related

+ [\_\_callStatic() Method](__callstatic.ini.html)
+ [Magic Methods](magic-method.ini.html)
+ [Method](method.ini.html)
+ [Proxy](proxy.ini.html)
+ [Meta-object Protocol (MOP)](meta-object-protocol.ini.html)
+ [Metaclass](metaclass.ini.html)
+ [Metaprogramming](metaprogramming.ini.html)
+ [Open Class](open-class.ini.html)
