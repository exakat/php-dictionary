# implements
``implements`` is a keyword, dedicated to classes. It specify which interfaces a class implements.

Implemented interfaces may be tested with types, ``instanceof``, and ``is_a()``.

The list of implemented interfaces is accessible with the ``class_implements()`` function.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implements.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implements.html","name":"implements","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"implements is a keyword, dedicated to classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implements.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"implements"}]}]}</script>
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

+ [Class](class.html)
+ [Class Getter Method](getter.html)
+ [extends](extends.html)
+ [class\_implements()](class_implements.html)
