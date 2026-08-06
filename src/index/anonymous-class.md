# Anonymous Class
A class may be instantiated, without defining a class name. The class is identical to a named-class, except for the name attribute. This also means that it cannot be used for typing, though it may be typed itself, using parent class or implemented interfaces. 

Also, arguments may be passed at instantiation time, unlike with named-class definition, where those arguments are passed when calling ``new``, not when defining the class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/anonymous-class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/anonymous-class.html","name":"Anonymous Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A class may be instantiated, without defining a class name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Anonymous Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    interface I {}

    function foo(I $a) {}

    $a = new class () implements I {};

    foo($a);

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.anonymous.php)**
## See Also

+ [PHP Anonymous Class](https://www.phptutorial.net/php-oop/php-anonymous-class/)
+ [PHP 7.0 - Anonymous Classes](https://blog.programster.org/php7-0-anonymous-classes)

## Related

+ [Closure](closure.ini.html)
+ [Anonymous](anonymous.ini.html)
