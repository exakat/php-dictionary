# Gradual Typing
Gradual typing is a type system that lets typed and untyped, or loosely typed, code coexist and interoperate, with the amount of checking growing incrementally rather than being all-or-nothing. A value can flow between a strictly typed region and a dynamically typed one, with the boundary checked at the point where the two meet.

PHP's type system has grown this way release by release rather than arriving as a single design: class types in version 5.0, scalar types in version 7.0, union types, nullsafe operators, and DNF types since. Each addition is checked at runtime, so the language never had to make a single, all-at-once jump to a fully static system, and existing code keeps working as new, more precise, typed constructs become available around it. ``mixed``, and the absence of a declared type, are what let a codebase stay only partially typed at any point along that path.

Proposals to add generics follow the same philosophy: rather than erased, compile-time-only type parameters, the direction under discussion starts with invariant type parameters that are actually checked at runtime on a narrow surface, such as interfaces, and can grow from there, keeping every new construct held to the same rule the rest of the type system already follows.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gradual-typing.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gradual-typing.html","name":"Gradual Typing","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 08:25:54 +0000","dateModified":"Thu, 13 Aug 2026 08:25:54 +0000","description":"Gradual typing is a type system that lets typed and untyped, or loosely typed, code coexist and interoperate, with the amount of checking growing incrementally rather than being all-or-nothing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gradual-typing.html"]}],"alternateName":["gradual-type-system"],"keywords":["type","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-inference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-narrowing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-widening.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dnf-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mixed.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-parametricity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-analysis.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Gradual_typing"},{"@type":"CreativeWork","name":"PHP\u2019s Gradual Typing Journey: From Wild West to Almost Respectable","url":"https:\/\/www.javacodegeeks.com\/2026\/01\/phps-gradual-typing-journey-from-wild-west-to-almost-respectable.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"gradual-typing"}]}]}</script>
```php
<?php

    function total(array $orders): mixed // mixed marks the boundary: untyped by choice
    {
        // ...
    }

    function totalTyped(array $orders): Money // strictly typed, checked at runtime
    {
        // ...
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Gradual_typing)**
## See Also

+ [PHP’s Gradual Typing Journey: From Wild West to Almost Respectable](https://www.javacodegeeks.com/2026/01/phps-gradual-typing-journey-from-wild-west-to-almost-respectable.html)

## Related

+ [Type System](type-system.html)
+ [Type Checking](type-checking.html)
+ [Type Inference](type-inference.html)
+ [Type Narrowing](type-narrowing.html)
+ [Type Widening](type-widening.html)
+ [Disjunctive Normal Form (DNF)](dnf-type.html)
+ [Mixed](mixed.html)
+ [Type Parametricity](type-parametricity.html)
+ [Static Code Analysis (SCA)](static-analysis.html)
