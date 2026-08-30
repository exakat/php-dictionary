# \_\_isset() Method
``__isset()`` is a magic method: it is called when the existence of a property has to be checked.

That way, it is possible to create dynamically properties, without hardcoding them. 

The ``__isset()`` method is usually paired with the ``__get()`` and ``__set()`` methods.

The ``__isset()`` is called by ``isset()`` and ``empty()``. They are also called by the coalesce operator ``??`` and ``??=``. It is not called on null-safe object operator ``?->``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__isset.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__isset.html","name":"__isset() Method","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:32:55 +0000","dateModified":"Tue, 04 Aug 2026 11:32:55 +0000","description":"__isset() is a magic method: it is called when the existence of a property has to be checked","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__isset.html"]}],"keywords":["magic method"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__set.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__get.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__unset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/isset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/null.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nullsafe-object-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-property.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.overloading.php#object.isset"},{"@type":"CreativeWork","name":"A Look At PHP\u2019s isset()","url":"https:\/\/medium.com\/@liamhammett\/a-look-at-phps-isset-df64df7158ab"},{"@type":"CreativeWork","name":"__get(), __set(), __isset() and __unset()","url":"https:\/\/riptutorial.com\/php\/example\/3635\/--get------set------isset---and---unset--"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"__isset"}]}]}</script>
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

+ [Magic Methods](magic-method.html)
+ [\_\_set() Method](__set.html)
+ [\_\_get() Method](__get.html)
+ [\_\_unset() Method](__unset.html)
+ [Isset](isset.html)
+ [Null](null.html)
+ [Null Safe Object Operator](nullsafe-object-operator.html)
+ [Magic Property](magic-property.html)
