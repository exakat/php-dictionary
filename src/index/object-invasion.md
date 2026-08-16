# Object Invasion
PHP allows objects of one class to access private structures of an object of the same class.

This is useful when cloning or importing objects with ``__set_state()``: within the same class, those methods can create new objects and assign all their properties.

This feature break OOP encapsulation: even when using private visibility, it is possible to access then from outside the object.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-invasion.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-invasion.html","name":"Object Invasion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"PHP allows objects of one class to access private structures of an object of the same class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Object Invasion.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"object-invasion"}]}]}</script>
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

+ [\_\_set\_state() Method](__set_state.html)

## Related packages

+ [spatie/invade](https://packagist.org/packages/spatie/invade)
