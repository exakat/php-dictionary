# Dynamic Properties
Dynamic properties are properties created on the fly, without previous definition. 

When the class implements the magic methods ``__get()`` and ``__set()``, of if the class extends ``stdClass``, then no warning is emitted.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dynamic-property.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dynamic-property.ini.html","name":"Dynamic Properties","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Dynamic properties are properties created on the fly, without previous definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Dynamic Properties.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        private $property = 1;
        
        function foo() {
            // dynamic property
            $this->a = 1;
            
            // dynamic property with variable name 
            $b = 'abc';
            $this->$b = 1; 
            
            // static property
            $this->property = 1;
        }
    }

?>
```

**[Documentation](https://wiki.php.net/rfc/deprecate_dynamic_properties)**
## See Also

+ [PHP, what are dynamic properties?](https://medium.com/geekculture/php-what-are-dynamic-properties-2509c6fbccf8)
+ [PHP's Dynamic Properties RFC: A Case of Solving the Wrong Problem](https://luandaphp.unaux.com/php-dynamic-properties-article.html)

## Related

+ [Properties](property.ini.html)
+ [Magic Methods](magic-method.ini.html)
+ [stdclass](stdclass.ini.html)
+ [Dynamic](dynamic.ini.html)
+ [Var](var.ini.html)
