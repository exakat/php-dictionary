# Existential Type
An existential type expresses that there exists some concrete type satisfying a constraint, without naming that type at the call site. Where a universally quantified type says "for all T", an existential type says "there exists a T".

The distinction matters when a value is produced by a module or function that hides its concrete type behind an interface. A data structure typed as ``∃T. (T, T -> String)`` contains a value of some unknown type T together with a function to convert it to a string. The consumer can call the conversion function but cannot inspect or name T itself: the type is sealed inside the abstraction.

In Haskell this is expressed with ``forall`` in data constructors, ``data ShowBox = forall a. Show a => SB a``, effectively hiding the concrete type. In Scala, existential types appear as ``_`` wildcards or through use-site variance. Rust approximates existentials with ``impl Trait`` in return position.

PHP does not support existential types. Interface types are the closest approximation: a function returning ``Countable`` hides the concrete class, but PHP interfaces cannot carry existentially quantified type parameters. Generics would be a prerequisite, as existential types are typically expressed as a bounded generic whose parameter is hidden from the caller.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/existential-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/existential-type.html","name":"Existential Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 07:36:23 +0000","dateModified":"Tue, 07 Jul 2026 07:36:23 +0000","description":"An existential type expresses that there exists some concrete type satisfying a constraint, without naming that type at the call site","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Existential Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Existential Type"}]}]}</script>
```php
<?php

    // PHP approximation: returning an interface hides the concrete type,
    // but PHP cannot express the type parameter that goes with it.
    interface Printable {
        public function print(): void;
    }

    // The caller knows only that something Printable was returned;
    // it cannot name or inspect the concrete type.
    function makePrintable(mixed $data): Printable {
        return new class($data) implements Printable {
            public function __construct(private readonly mixed $inner) {}
            public function print(): void { var_dump($this->inner); }
        };
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Type_system#Existential_types)**
## See Also

+ [Existential quantification on Wikipedia](https://en.wikipedia.org/wiki/Existential_quantification)

## Related

+ [Generics](generics.html)
+ [Type System](type-system.html)
+ [Polymorphism](polymorphism.html)
+ [Interface](interface.html)
+ [Encapsulation](encapsulation.html)
+ [Algebraic Data Type](algebraic-data-type.html)
+ [Higher-Kinded Type](higher-kinded-type.html)
