# Side Effect
A side effect refers to any change in the state of a program or system that occurs when a function or expression is evaluated, beyond simply returning a value. Side effects are actions that affect something outside the function's scope, such as modifying a global variable, reading or writing in database, files or any remote API, display data, modify environment. 

Side effects are a concept of programming in general. It is important in functional programming, where function without a side effect are called pure.

Side effect has also the literal meaning of a consequence to an action or a situation, similar to collateral.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/side-effect.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/side-effect.html","name":"Side Effect","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:33:28 +0000","dateModified":"Mon, 13 Jul 2026 09:33:28 +0000","description":"A side effect refers to any change in the state of a program or system that occurs when a function or expression is evaluated, beyond simply returning a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Side Effect.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Side Effect"}]}]}</script>
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
+ [Functional Programming](functional-programming.html)
+ [Determinism](determinism.html)
+ [Event Sourcing](event-sourcing.html)
+ [Impure Function](impure-function.html)
+ [Effect System](effect-system.html)
+ [Fire-and-forget](fire-and-forget.html)
+ [Global State](global-state.html)
+ [Mutable State](mutable-state.html)

## Related packages

+ [staabm/side-effects-detector](https://packagist.org/packages/staabm/side-effects-detector)
