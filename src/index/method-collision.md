# Method Collision
A method collision happens when a trait is imported in a class, and it holds a method that already exists in the class.

To solve such a collision, the code must use ``insteadof`` and ``use`` keywords, in the ``use`` expression.

There is no collision between the imported trait and the parent of the class, as the trait has priority over the parents. There is also no collision when a trait import another trait: the last method has precedence.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-collision.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-collision.html","name":"Method Collision","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A method collision happens when a trait is imported in a class, and it holds a method that already exists in the class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Method Collision.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Method Collision"}]}]}</script>
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

+ [Trait](trait.html)
+ [Insteadof](insteadof.html)
+ [Use In Traits](use-trait.html)
+ [Method](method.html)
