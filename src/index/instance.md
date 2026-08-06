# instance
An instance is an object of a class. The class provides the definitions of the behavior of that object, while the object holds the specific data, that makes it unique and distinguishable. 

The creation of an instance, called instantiation, is done with the ``new`` keyword.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/instance.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/instance.html","name":"instance","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"An instance is an object of a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/instance.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class X {
    private int $property;
    
    function __construct(int $arg) {
        $this->propety = $arg;
    }
}

$object = new X(2);

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.new)**
## Related

+ [Class](class.ini.html)
+ [Object](object.ini.html)
+ [new](new.ini.html)
+ [Constructor](constructor.ini.html)
+ [Non-instantiable](non-instantiable.ini.html)
+ [Reflection](reflection.ini.html)
