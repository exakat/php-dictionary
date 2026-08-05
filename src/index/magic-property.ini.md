# Magic Property
Special properties, which are not declared, but dynamically handled by the magic methods. They do not have specific declaration. 

The magic methods to handle magic properties are: ``__get()``, ``__set()``, ``__isset()`` and ``__unset()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/magic-property.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/magic-property.ini.html","name":"Magic Property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Special properties, which are not declared, but dynamically handled by the magic methods","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Magic Property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class X {
    function __get($name) {
        return 'World!';
    }
}

$x = new X;
echo $x->hello; // display World!

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php)**
## Related

+ [\_\_get() Method](__get.ini.html)
+ [\_\_set() Method](__set.ini.html)
+ [\_\_isset() Method](__isset.ini.html)
+ [\_\_unset() Method](__unset.ini.html)
+ [Magic Constants](magic-constant.ini.html)
+ [Magic](magic.ini.html)
+ [Properties](property.ini.html)
