# \_\_set() Method
``__set()`` is a magic method: it is called when writing data to inaccessible, either protected or private, or non-existing properties. It is used to give a value to the property.

That way, it is possible to create dynamically properties, without hardcoding them. 

The ``__set()`` method is usually paired with the ``__get()`` method.

The method signature is ``public function __set(string $name, mixed $value): void``. The ``$name`` argument is the name of the property being interacted with. The ``$value`` argument specifies the value the ``$name``-ed property should be set to. The return value of ``__set()`` is ignored because of the way PHP processes the assignment operator. 

The method must be declared as ``public``, or it is implicit. Arguments cannot be passed by reference. Property overloading only works in object context and will not be triggered in static context.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__set.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__set.html","name":"__set() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"__set() is a magic method: it is called when writing data to inaccessible, either protected or private, or non-existing properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__set() Method.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"__set"}]}]}</script>
```php
<?php

    class X {
        private $values = ['a' => 1,
                           'b' => 2,
                           ];
    
        // Checks the dictionary, or return 0
        function __set($name, $value) {
            if (isset($this->values[$name])) {
                $this->values[$name] = $value;
            }
            
            //do not set new values
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php)**
## See Also

+ [PHP’s magic methods: Invoke, toString, get, set – Class wizardry in a nutshell](https://www.dinocajic.com/built-in-functions-invoke-tostring-get-set/)
+ [__get(), __set(), __isset() and __unset()](https://riptutorial.com/php/example/3635/--get------set------isset---and---unset--)

## Related

+ [Magic Methods](magicmethod.html)
+ [\_\_get() Method](__get.html)
+ [\_\_isset() Method](__isset.html)
+ [Magic Constants](magic-constant.html)
+ [\_\_unset() Method](__unset.html)
+ [Magic Methods](magic-method.html)
+ [Magic Property](magic-property.html)
+ [Property Hook](property-hook.html)
