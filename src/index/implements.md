# implements
``implements`` is a keyword, dedicated to classes. It specify which interfaces a class implements.

Implemented interfaces may be tested with types, ``instanceof``, and ``is_a()``.

The list of implemented interfaces is accessible with the ``class_implements()`` function.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/implements.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/implements.html","name":"implements","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 07:56:44 +0000","dateModified":"Fri, 03 Jul 2026 07:56:44 +0000","description":"``implements`` is a keyword, dedicated to classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/implements.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    interface I {
        function fooi() ;
    }
    
    // empty interface 
    interface J { }
    
    class X implements I, J {
        private $property;
        
        public function fooi() {
            return 1;
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.interfaces.php#language.oop5.interfaces.implements)**
## See Also

+ [PHP Interfaces: How to Implement and Use Them](https://medium.com/@andreibirta95/php-interfaces-how-to-implement-and-use-them-58c8b0648480)

## Related

+ [Class](class.ini.html)
+ [Class Getter Method](getter.ini.html)
+ [extends](extends.ini.html)
+ [class\_implements()](class_implements.ini.html)
