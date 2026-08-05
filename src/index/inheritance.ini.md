# Inheritance
Inheritance is a mechanism where a class is build from another class, and form a hierarchy of classes that share a set of attributes and methods.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/inheritance.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/inheritance.ini.html","name":"Inheritance","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Inheritance is a mechanism where a class is build from another class, and form a hierarchy of classes that share a set of attributes and methods","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Inheritance.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class x {
    public function foo() {
        echo "I am foo!\n";
    }
}

class y extends x {
    public function boo() {
        echo "I am boo!\n";
    }
}

$y = new Y();
$y->boo(); // calling the boo method, defined only with y
$y->foo(); // calling the foo method, defined in x, and inherited in y

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.inheritance.php)**
## See Also

+ [This is why PHP don't have multiple inheritance](https://www.amitmerchant.com/this-is-why-php-dont-have-multiple-inheritance/)

## Related

+ [Class](class.ini.html)
+ [Class Hierarchy](class-hierarchy.ini.html)
+ [Composition](composition.ini.html)
+ [Constructor](constructor.ini.html)
+ [Operator Overloading](operator-overloading.ini.html)
+ [Overwrite](overwrite.ini.html)
+ [Base Class](base-class.ini.html)
+ [Base](base.ini.html)
+ [Method Resolution Order (MRO)](mro.ini.html)
+ [Polymorphism](polymorphism.ini.html)
