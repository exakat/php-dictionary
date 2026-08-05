# Method Collision
A method collision happens when a trait is imported in a class, and it holds a method that already exists in the class.

To solve such a collision, the code must use ``insteadof`` and ``use`` keywords, in the ``use`` expression.

There is no collision between the imported trait and the parent of the class, as the trait has priority over the parents. There is also no collision when a trait import another trait: the last method has precedence.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/method-collision.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/method-collision.ini.html","name":"Method Collision","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A method collision happens when a trait is imported in a class, and it holds a method that already exists in the class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Method Collision.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

trait T {
    function foo() { echo __METHOD__; }
}

trait U {
    function foo() { echo __METHOD__; }
}

class C {
    use u, t {
        use t::foo instead of u;
    }
}

new c()->goo();
```

**[Documentation](https://www.php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict)**
## Related

+ [Trait](trait.ini.html)
+ [Insteadof](insteadof.ini.html)
+ [Use In Traits](use-trait.ini.html)
+ [Method](method.ini.html)
