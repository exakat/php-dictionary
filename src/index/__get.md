# \_\_get() Method
``__get()`` is a magic method: it is utilized for reading data from inaccessible, either protected or private, or non-existing properties.

That way, it is possible to create dynamically properties, without hardcoding them.

The ``__get()`` method is usually paired with the ``__set()`` method.

The method signature is ``public function __get(string $name): mixed``. The ``$name`` argument is the name of the property being interacted with. 

The method must be declared as ``public``, or it is implicit. Arguments cannot be passed by reference. Property overloading only works in object context and will not be triggered in static context. 

``__get()`` is never called when chaining assignments together like ``$a = $obj->b = 8;``. PHP will not call an overloaded method from within the same overloaded method: writing ``return $this->foo`` inside of ``__get()`` will return ``null`` and raise an ``E_WARNING`` if there is no ``foo`` property defined, rather than calling ``__get()`` a second time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__get.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__get.html","name":"__get() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:44:29 +0000","dateModified":"Mon, 03 Aug 2026 16:44:29 +0000","description":"``__get()`` is a magic method: it is utilized for reading data from inaccessible, either protected or private, or non-existing properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__get() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        private $values = ['a' => 1,
                           'b' => 2,
                           ];
    
        // Checks the dictionary, or return 0
        function __get($name) {
            if (isset($this->values[$name])) {
                return $this->values[$name];
            }
            
            return 0;
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php)**
## See Also

+ [What are magic methods and how to use them in PHP ?](https://www.geeksforgeeks.org/what-are-magic-methods-and-how-to-use-them-in-php/)
+ [__get(), __set(), __isset() and __unset()](https://riptutorial.com/php/example/3635/--get------set------isset---and---unset--)

## Related

+ [Magic Methods](magicmethod.ini.html)
+ [\_\_set() Method](__set.ini.html)
+ [\_\_isset() Method](__isset.ini.html)
+ [Magic Constants](magic-constant.ini.html)
+ [Magic Methods](magic-method.ini.html)
+ [Magic Property](magic-property.ini.html)
+ [Property Hook](property-hook.ini.html)
