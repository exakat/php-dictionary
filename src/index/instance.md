# instance
An instance is an object of a class. The class provides the definitions of the behavior of that object, while the object holds the specific data, that makes it unique and distinguishable. 

The creation of an instance, called instantiation, is done with the ``new`` keyword.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instance.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instance.html","name":"instance","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 08:02:47 +0000","dateModified":"Sun, 16 Aug 2026 08:02:47 +0000","description":"An instance is an object of a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instance.html"]}],"alternateName":["instantiate","instantiation"],"keywords":["object","class"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constructor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-instantiable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflection.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.basic.php#language.oop5.basic.new"},{"@type":"CreativeWork","name":"Instance (computer science) (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Instance_(computer_science)"},{"@type":"CreativeWork","name":"PHP Reflection API","url":"https:\/\/www.php.net\/manual\/en\/book.reflection.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"instance"}]}]}</script>
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
## See Also

+ [Instance (computer science) (Wikipedia)](https://en.wikipedia.org/wiki/Instance_(computer_science))
+ [PHP Reflection API](https://www.php.net/manual/en/book.reflection.php)

## Related

+ [Class](class.html)
+ [Object](object.html)
+ [new](new.html)
+ [Constructor](constructor.html)
+ [Non-instantiable](non-instantiable.html)
+ [Reflection](reflection.html)
