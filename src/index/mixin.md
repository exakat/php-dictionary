# Mixin
A mixin is a class-level construct that provides a set of methods intended to be incorporated into other classes, without forming a base-class relationship. Unlike inheritance, a mixin does not impose an ``is-a`` relationship. Unlike an interface, it supplies concrete implementations. Unlike a trait, as PHP defines it, a mixin is itself an instantiable class or a first-class language entity that is composed through language syntax rather than a ``use`` directive inside the class body.

Languages such as Dart, Kotlin via delegation, and Scala via self-types and stackable modifications offer mixins as distinct, class-level features.

PHP does not have mixins. PHP traits are the closest analogue: they provide method reuse without inheritance. However, traits differ from true mixins in several ways:

+ A trait is not a class and cannot be instantiated on its own
+ A trait is composed inside the class definition: it cannot be applied after the fact
+ A trait cannot extend another class; a mixin in some languages can carry its own class hierarchy
+ PHP traits are resolved at compile time; some mixin systems allow run-time composition

PHP interfaces with default implementations as in Java are also a common comparison point, but PHP interfaces carry no implementation at all.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mixin.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mixin.html","name":"Mixin","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:07:49 +0000","dateModified":"Sun, 02 Aug 2026 06:07:49 +0000","description":"A mixin is a class-level construct that provides a set of methods intended to be incorporated into other classes, without forming a base-class relationship","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Mixin.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"mixin"}]}]}</script>
```php
<?php

    // PHP uses traits as the closest equivalent to mixins.
    // They share the intent but differ from class-level mixins.
    
    trait Timestampable {
        private \DateTimeImmutable $createdAt;
    
        public function getCreatedAt(): \DateTimeImmutable {
            return $this->createdAt;
        }
    }
    
    class Article {
        use Timestampable;   // composed here, not applied externally
    }
    
    // A true class-level mixin (as in Dart) would be declared separately
    // and applied without modifying the target class source.

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Mixin)**
## See Also

+ [Dart mixins](https://dart.dev/language/mixins)

## Related

+ [Trait](trait.html)
+ [Use In Traits](use-trait.html)
+ [Open Class](open-class.html)
+ [Polymorphism](polymorphism.html)
+ [Method Resolution Order (MRO)](mro.html)
