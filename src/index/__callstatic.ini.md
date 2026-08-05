# \_\_callStatic() Method
``__callStatic()`` is a magic method: it is called when a static method cannot be accessed: either because it doesn't exist or because its visibility prevents it. 

``__callStatic()`` is not called when the method exists and is not static.

That way, it is possible to create dynamically static methods, without hardcoding them. 

The ``__callStatic()`` method receives the name of the target-method, and a list of arguments. 

The ``__callStatic()`` method has a related version for non-static methods, called ``__call()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__callstatic.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__callstatic.ini.html","name":"__callStatic() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 04:24:52 +0000","dateModified":"Wed, 08 Jul 2026 04:24:52 +0000","description":"``__callStatic()`` is a magic method: it is called when a static method cannot be accessed: either because it doesn't exist or because its visibility prevents it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__callStatic() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        // Checks the dictionary, or return 0
        static function __callStatic($name, $args) {
            if (method_exists(self::class, $name)) {
                return X::$name(...$args);
            }
            
            return 0;
        }
        
        private static function foo() {
            print __METHOD__;
        }
    }
    
    X::foo(); // X::foo
    X::bar(); // nothing

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php)**
## See Also

+ [Understand more magic methods: __callStatic()](https://dev.to/ngodinhcuong/understand-more-magic-methods-callstatic-2828)
+ [PHP __callStatic](https://www.phptutorial.net/php-oop/php-__callstatic/)

## Related

+ [Magic Methods](magic-method.ini.html)
+ [\_\_call() Method](__call.ini.html)
+ [Visibility](visibility.ini.html)
