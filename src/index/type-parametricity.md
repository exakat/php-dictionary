# Type Parametricity
Type parametricity, or parametric polymorphism, is the ability to write a function, class, or interface once and have it work uniformly over any type, with that type supplied as a parameter rather than hard-coded. ``list<Order>`` and ``array<string, Money>`` describe the same shape as ``list<Animal>``: only the type parameter changes, the code that manipulates the list does not.

PHP has no native syntax for this. Every type declaration the engine understands, from class types to scalar types to DNF types, is checked at runtime, and a naive generics implementation would either need a full compilation step that verifies the parameter before execution, as Java and TypeScript do through type erasure, or it would need to check the parameter at every access, which the engine does not currently do.

In practice, PHP code expresses type parametricity today through a docblock type language, interpreted by tools such as PHPStan and Psalm rather than by the engine: ``@param list<Order> $orders``. This delivers most of the benefit of generics without a language change, at the cost of the check happening in a separate tool instead of the runtime. Proposals such as bound-erased generic types tried to bring the syntax into the language without the runtime check and were declined for breaking the invariant that a PHP type declaration is always enforced; a gradual, runtime-checked path starting with invariant type parameters on interfaces is being explored instead.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-parametricity.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-parametricity.html","name":"Type Parametricity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 06:34:37 +0000","dateModified":"Thu, 13 Aug 2026 06:34:37 +0000","description":"Type parametricity, or parametric polymorphism, is the ability to write a function, class, or interface once and have it work uniformly over any type, with that type supplied as a parameter rather than hard-coded","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Type Parametricity.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"type-parametricity"}]}]}</script>
```php
<?php

    /**
     * @param list<Order> $orders
     * @return Money
     */
    function total(array $orders): Money
    {
        return array_reduce($orders, fn (Money $sum, Order $o) => $sum->add($o->total()), Money::zero());
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Parametric_polymorphism)**
## See Also

+ [Bound Erased Generic Types](https://wiki.php.net/rfc/bound_erased_generic_types)

## Related

+ [Generics](generics.html)
+ [Types Erasure](type-erasure.html)
+ [Covariance](type-covariance.html)
+ [Existential Type](existential-type.html)
+ [Row Polymorphism](row-polymorphism.html)
+ [Type System](type-system.html)
+ [Polymorphism](polymorphism.html)
+ [Docblock](docblock.html)
+ [Static Code Analysis (SCA)](static-analysis.html)
