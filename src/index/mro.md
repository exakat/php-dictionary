# Method Resolution Order (MRO)
Method Resolution Order, or MRO, is the algorithm that determines the order in which base classes are searched when looking up a method or property in an inheritance hierarchy.

PHP MRO applies to class hierarchies, via ``extends`` and trait composition, via ``use``. When a method is called, PHP follows a specific resolution order to find the implementation: the class itself first, then traits, then parent classes, recursively.

For traits, since there may be several of them, PHP uses a priority system: methods defined in the using class override trait methods, and traits listed first take precedence over those listed later. Conflicts between traits must be resolved explicitly using ``insteadof`` and ``as`` operators.

This becomes critical in deep inheritance chains or with multiple traits, where the resolution order may not be immediately obvious and can lead to unexpected behavior if not managed carefully.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mro.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mro.html","name":"Method Resolution Order (MRO)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 08:15:55 +0000","dateModified":"Thu, 13 Aug 2026 08:15:55 +0000","description":"Method Resolution Order, or MRO, is the algorithm that determines the order in which base classes are searched when looking up a method or property in an inheritance hierarchy","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mro.html"]}],"alternateName":["method-resolution-order","c3-linearization"],"keywords":["concept","oop","inheritance","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inheritance.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/child-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overloading.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/override.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/late-static-binding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstract-class.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.traits.php#language.oop5.traits.conflict"},{"@type":"CreativeWork","name":"C3 linearization algorithm in Python","url":"https:\/\/www.geeksforgeeks.org\/python\/c3-linearization-algorithm-in-python\/"},{"@type":"CreativeWork","name":"The Python 2.3 Method Resolution Order","url":"https:\/\/www.python.org\/download\/releases\/2.3\/mro\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"mro"}]}]}</script>
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
## See Also

+ [C3 linearization algorithm in Python](https://www.geeksforgeeks.org/python/c3-linearization-algorithm-in-python/)
+ [The Python 2.3 Method Resolution Order](https://www.python.org/download/releases/2.3/mro/)

## Related

+ [Trait](trait.html)
+ [Inheritance](inheritance.html)
+ [parent](parent.html)
+ [Child Class](child-class.html)
+ [Overloading](overloading.html)
+ [Override Attribute](override.html)
+ [Late Static Binding](late-static-binding.html)
+ [Abstract Class](abstract-class.html)
