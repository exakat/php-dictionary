# Side Effect
A side effect refers to any change in the state of a program or system that occurs when a function or expression is evaluated, beyond simply returning a value. Side effects are actions that affect something outside the function's scope, such as modifying a global variable, reading or writing to a database, files or any remote API, displaying data, or modifying the environment.

Side effects are a concept of programming in general. It is important in functional programming, where functions without side effects are called pure.

Side effect has also the literal meaning of a consequence to an action or a situation, similar to collateral.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/side-effect.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/side-effect.html","name":"Side Effect","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 07:41:03 +0000","dateModified":"Mon, 24 Aug 2026 07:41:03 +0000","description":"A side effect refers to any change in the state of a program or system that occurs when a function or expression is evaluated, beyond simply returning a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/side-effect.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pure-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/functional-programming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/determinism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-sourcing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/impure-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/effect-system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fire-and-forget.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global-state.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mutable-state.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Side_effect_(computer_science)"},{"@type":"CreativeWork","name":"side-effects-detector","url":"https:\/\/github.com\/staabm\/side-effects-detector"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"side-effect"}]}]}</script>
```php
<?php

    // A pure function, with no side effect 
    function foo($a, $b) {
        return $a + $b;
    }
    
    // An impure function
    function goo($a, $b) {
        echo $a;
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Side_effect_(computer_science))**
## See Also

+ [side-effects-detector](https://github.com/staabm/side-effects-detector)

## Related

+ [Pure Function](pure-function.html)
+ [Functional Programming (FP)](functional-programming.html)
+ [Determinism](determinism.html)
+ [Event Sourcing](event-sourcing.html)
+ [Impure Function](impure-function.html)
+ [Effect System](effect-system.html)
+ [Fire-and-forget](fire-and-forget.html)
+ [Global State](global-state.html)
+ [Mutable State](mutable-state.html)

## Related packages

+ [staabm/side-effects-detector](https://packagist.org/packages/staabm/side-effects-detector)
