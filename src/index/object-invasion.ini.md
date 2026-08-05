# Object Invasion
PHP allows objects of one class to access private structures of an object of the same class.

This is useful when cloning or importing objects with ``__set_state()``: within the same class, those methods can create new objects and assign all their properties.

This feature break OOP encapsulation: even when using private visibility, it is possible to access then from outside the object.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/object-invasion.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/object-invasion.ini.html","name":"Object Invasion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"PHP allows objects of one class to access private structures of an object of the same class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Object Invasion.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class A {
    private $p = 0;
    
    // accessing a different object
    function foo(A $a) {
        $a->p = $this->p;
    }

    function __set_state($array) {
        $object = new self();
        $object->p = $array['p'];
        
        return $object;
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.visibility.php#language.oop5.visibility-other-objects)**
## Related

+ [\_\_set\_state() Method](__set_state.ini.html)

## Related packages

+ [spatie/invade](https://packagist.org/packages/spatie/invade)
