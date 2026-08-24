# \_\_get() Method
``__get()`` is a magic method: it is utilized for reading data from inaccessible, either protected or private, or non-existing properties.

That way, it is possible to dynamically create properties, without hardcoding them.

The ``__get()`` method is usually paired with the ``__set()`` method.

The method signature is ``public function __get(string $name): mixed``. The ``$name`` argument is the name of the property being interacted with. 

The method must be declared as ``public``, or it is implicit. Arguments cannot be passed by reference. Property overloading only works in object context and will not be triggered in static context. 

``__get()`` is never called when chaining assignments together like ``$a = $obj->b = 8;``. PHP will not call an overloaded method from within the same overloaded method: writing ``return $this->foo`` inside of ``__get()`` will return ``null`` and raise an ``E_WARNING`` if there is no ``foo`` property defined, rather than calling ``__get()`` a second time.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__get.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__get.html","name":"__get() Method","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:42:38 +0000","dateModified":"Tue, 11 Aug 2026 14:42:38 +0000","description":"__get() is a magic method: it is utilized for reading data from inaccessible, either protected or private, or non-existing properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__get.html"]}],"keywords":["magic method"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magicmethod.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__set.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__isset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property-hook.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.magic.php"},{"@type":"CreativeWork","name":"What are magic methods and how to use them in PHP ?","url":"https:\/\/www.geeksforgeeks.org\/what-are-magic-methods-and-how-to-use-them-in-php\/"},{"@type":"CreativeWork","name":"__get(), __set(), __isset() and __unset()","url":"https:\/\/riptutorial.com\/php\/example\/3635\/--get------set------isset---and---unset--"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"__get"}]}]}</script>
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

+ [Magic Methods](magicmethod.html)
+ [\_\_set() Method](__set.html)
+ [\_\_isset() Method](__isset.html)
+ [Magic Constants](magic-constant.html)
+ [Magic Methods](magic-method.html)
+ [Magic Property](magic-property.html)
+ [Property Hook](property-hook.html)
