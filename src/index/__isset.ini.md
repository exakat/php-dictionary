# \_\_isset() Method
``__isset()`` is a magic method: it is called when the existence of a property has to be checked.

That way, it is possible to create dynamically properties, without hardcoding them. 

The ``__isset()`` method is usually paired with the ``__get()`` and ``__set()`` methods.

The ``__isset()`` is called by ``isset()`` and ``empty()``. They are also called by the coalesce operator ``??`` and ``??=``. It is not called on null-safe object operator ``?->``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__isset.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__isset.ini.html","name":"__isset() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:32:55 +0000","dateModified":"Tue, 04 Aug 2026 11:32:55 +0000","description":"``__isset()`` is a magic method: it is called when the existence of a property has to be checked","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__isset() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        private $values = ['a' => 1,
                           'b' => 2,
                           ];
    
        function __isset($name) {
            return isset($this->values[$name]);
        }
    }
    
    $x = new X;
    var_dump(isset($x->a)); // true 
    var_dump(empty($x->c)); // false 

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.overloading.php#object.isset)**
## See Also

+ [A Look At PHP’s isset()](https://medium.com/@liamhammett/a-look-at-phps-isset-df64df7158ab)
+ [__get(), __set(), __isset() and __unset()](https://riptutorial.com/php/example/3635/--get------set------isset---and---unset--)

## Related

+ [Magic Methods](magic-method.ini.html)
+ [\_\_set() Method](__set.ini.html)
+ [\_\_get() Method](__get.ini.html)
+ [\_\_unset() Method](__unset.ini.html)
+ [Isset](isset.ini.html)
+ [Null](null.ini.html)
+ [Null Safe Object Operator](nullsafe-object-operator.ini.html)
+ [Magic Property](magic-property.ini.html)
