# Composition
Composition is the creation of new classes, by including other classes, and delivering a specific interface over them. It expresses a ``has-a`` relationship, as opposed to inheritance's ``is-a`` relationship: a class holds references to other objects as properties, and delegates part of its behavior to them, rather than inheriting it from a parent class. This favors loose coupling, since the composing class can expose only the methods it chooses, while the composed objects can be swapped, reused, or tested independently. ``Favor composition over inheritance`` is a well-known object-oriented design guideline, because it avoids the rigid, fragile class hierarchies that deep inheritance chains tend to produce.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/composition.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/composition.html","name":"Composition","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 15:08:57 +0000","dateModified":"Sat, 11 Jul 2026 15:08:57 +0000","description":"Composition is the creation of new classes, by including other classes, and delivering a specific interface over them","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Composition.html"]}],"keywords":["classes"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inheritance.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interoperability.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Object_composition"},{"@type":"CreativeWork","name":"Composition Over Inheritance in PHP","url":"https:\/\/wendelladriel.com\/blog\/composition-over-inheritance-in-php"},{"@type":"CreativeWork","name":"Object composition in PHP with Example","url":"https:\/\/mohasin-dev.medium.com\/object-composition-in-php-with-example-ce5855b0473b"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"composition"}]}]}</script>
```php
<?php

class Wheel {
    public int $diameter;
}

class GasTank {
    public int $capacity;

    public function fillUp(int $amount) {
        $this->amount = $amount;
    }

    public function empty() {
        $this->amount = 0;
    }

}

// Car composes 2 other classes: GasTank and Wheel
// These object should be accessed via the Car class, not the direct objects
class Car {
    public Wheel $wheels;
    public GasTank $gasTank;
    
    public function fillUp(int $amount) {
        $this->gasTank->fillUp($amount);
    }

    // empty() the gasTank is now available via the car (just drive it, or and it to garage)
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Object_composition)**
## See Also

+ [Composition Over Inheritance in PHP](https://wendelladriel.com/blog/composition-over-inheritance-in-php)
+ [Object composition in PHP with Example](https://mohasin-dev.medium.com/object-composition-in-php-with-example-ce5855b0473b)

## Related

+ [Inheritance](inheritance.html)
+ [Interoperability](interoperability.html)
