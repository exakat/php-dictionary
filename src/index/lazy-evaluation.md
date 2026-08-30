# Lazy Evaluation
Lazy evaluation is an evaluation strategy in which an expression's value is not computed until it is actually needed, and, once computed, is often cached so it is never recomputed. Haskell evaluates every expression this way by default: a list can be infinite, because only the elements actually consumed are ever produced.

This is stronger than lazy iteration: it applies to any expression, including function arguments and let-bindings, not only to sequences produced one step at a time.

PHP is strictly, eagerly evaluated everywhere except in a few specific opt-in constructs. ``Generator`` functions built with ``yield`` produce values lazily, one at a time, on demand, and short-circuiting operators such as ``&&``, ``||``, and ``??`` skip evaluating their right-hand side when the outcome is already known. Outside of these, every argument, every array element, and every expression is fully evaluated as soon as control reaches it; there is no general, opt-out mechanism to defer an arbitrary computation until its result is read.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-evaluation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-evaluation.html","name":"Lazy Evaluation","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 07:45:42 +0000","dateModified":"Thu, 09 Jul 2026 07:45:42 +0000","description":"Lazy evaluation is an evaluation strategy in which an expression's value is not computed until it is actually needed, and, once computed, is often cached so it is never recomputed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-evaluation.html"]}],"keywords":["concept","not-supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yield.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-loading.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-objects.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/range-type.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Lazy_evaluation"},{"@type":"CreativeWork","name":"Lazy Evaluation in PHP: Real\u2011World Memory Savings with Generators","url":"https:\/\/dev.to\/phpner\/lazy-evaluation-in-php-how-generators-and-iterators-save-memory-and-speed-up-code-3529"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"lazy-evaluation"}]}]}</script>
```php
<?php

    // Lazy, but only because it is explicitly written as a generator.
    function naturals(): Generator {
        $n = 1;
        while (true) {
            yield $n++;
        }
    }
    
    foreach (naturals() as $n) {
        if ($n > 5) break;
        echo $n, ' ';
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Lazy_evaluation)**
## See Also

+ [Lazy Evaluation in PHP: Real‑World Memory Savings with Generators](https://dev.to/phpner/lazy-evaluation-in-php-how-generators-and-iterators-save-memory-and-speed-up-code-3529)

## Related

+ [Generator](generator.html)
+ [Yield](yield.html)
+ [Lazy Loading](lazy-loading.html)
+ [Lazy Objects](lazy-objects.html)
+ [Range Type](range-type.html)
