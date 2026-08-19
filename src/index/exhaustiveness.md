# Exhaustiveness
Exhaustiveness is the property of a pattern-matching or ``switch``-like construct that guarantees every possible case has been handled, checked by the compiler or engine rather than left to the developer to remember. A construct is exhaustive over a type when it is impossible to reach the end of it without matching a branch.

PHP's ``match`` is close but not exhaustive in this sense: it throws ``UnhandledMatchError`` at runtime if no arm applies, instead of refusing to compile a non-exhaustive match. That still closes an entire class of ``switch`` bugs, silent fallthrough and forgotten ``break``, but the gap is only caught when that code path executes, not before.

True exhaustiveness needs a closed set of cases to check against, which is why it usually appears together with sum types or algebraic data types, such as enumerations with associated values: the compiler can list every case of the type and verify the match covers all of them, or point at exactly the one that is missing. Pattern matching proposals that add structural matching over types and shapes are a step toward this, but full exhaustiveness checking requires the closed, enumerable type that a sum type provides.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exhaustiveness.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exhaustiveness.html","name":"Exhaustiveness","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 06:14:04 +0000","dateModified":"Thu, 13 Aug 2026 06:14:04 +0000","description":"Exhaustiveness is the property of a pattern-matching or switch-like construct that guarantees every possible case has been handled, checked by the compiler or engine rather than left to the developer to remember","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Exhaustiveness.html"]}],"alternateName":["exhaustiveness-checking"],"keywords":["type","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/match.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern-matching.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/structural-pattern-matching.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sum-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/algebraic-data-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unhandledmatcherror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-system.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Pattern_matching#Exhaustiveness"},{"@type":"CreativeWork","name":"Pattern Matching RFC","url":"https:\/\/wiki.php.net\/rfc\/pattern-matching"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"exhaustiveness"}]}]}</script>
```php
<?php

    enum Status { case Draft; case Published; case Archived; }

    // Not exhaustive: throws UnhandledMatchError if a new case is added later
    $label = match ($status) {
        Status::Draft => 'Draft',
        Status::Published => 'Live',
        // Status::Archived is missing
    };

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Pattern_matching#Exhaustiveness)**
## See Also

+ [Pattern Matching RFC](https://wiki.php.net/rfc/pattern-matching)

## Related

+ [Match](match.html)
+ [Switch](switch.html)
+ [Pattern Matching](pattern-matching.html)
+ [Structural Pattern Matching](structural-pattern-matching.html)
+ [Sum Type](sum-type.html)
+ [Algebraic Data Type](algebraic-data-type.html)
+ [UnhandledMatchError](unhandledmatcherror.html)
+ [Enumeration (enum)](enum.html)
+ [Type System](type-system.html)
