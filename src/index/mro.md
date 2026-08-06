# Method Resolution Order (MRO)
Method Resolution Order, or MRO, is the algorithm that determines the order in which base classes are searched when looking up a method or property in an inheritance hierarchy.

PHP MRO applies to class hierarchies, via ``extends`` and trait composition, via ``use``. When a method is called, PHP follows a specific resolution order to find the implementation: the class itself first, then traits, then parent classes, recursively.

For traits, since there may be several of them, PHP uses a priority system: methods defined in the using class override trait methods, and traits listed first take precedence over those listed later. Conflicts between traits must be resolved explicitly using ``insteadof`` and ``as`` operators.

This becomes critical in deep inheritance chains or with multiple traits, where the resolution order may not be immediately obvious and can lead to unexpected behavior if not managed carefully.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/mro.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/mro.html","name":"Method Resolution Order (MRO)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:20:19 +0000","dateModified":"Thu, 09 Jul 2026 08:20:19 +0000","description":"Method Resolution Order, or MRO, is the algorithm that determines the order in which base classes are searched when looking up a method or property in an inheritance hierarchy","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Method Resolution Order (MRO).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    trait A {
        function hello() { return 'A'; }
    }
    
    trait B {
        function hello() { return 'B'; }
    }
    
    class C {
        use A, B {
            A::hello insteadof B; // MRO: A wins over B
            B::hello as helloB;
        }
    }
    
    $c = new C();
    echo $c->hello();  // A
    echo $c->helloB(); // B

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict)**
## Related

+ [Trait](trait.ini.html)
+ [Inheritance](inheritance.ini.html)
+ [parent](parent.ini.html)
+ [Child Class](child-class.ini.html)
+ [Overloading](overloading.ini.html)
+ [Override Attribute](override.ini.html)
+ [Late Static Binding](late-static-binding.ini.html)
+ [Abstract Class](abstract-class.ini.html)
