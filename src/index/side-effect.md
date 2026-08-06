# Side Effect
A side effect refers to any change in the state of a program or system that occurs when a function or expression is evaluated, beyond simply returning a value. Side effects are actions that affect something outside the function's scope, such as modifying a global variable, reading or writing in database, files or any remote API, display data, modify environment. 

Side effects are a concept of programming in general. It is important in functional programming, where function without a side effect are called pure.

Side effect has also the literal meaning of a consequence to an action or a situation, similar to collateral.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/side-effect.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/side-effect.html","name":"Side Effect","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:33:28 +0000","dateModified":"Mon, 13 Jul 2026 09:33:28 +0000","description":"A side effect refers to any change in the state of a program or system that occurs when a function or expression is evaluated, beyond simply returning a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Side Effect.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Pure Function](pure-function.ini.html)
+ [Functional Programming](functional-programming.ini.html)
+ [Determinism](determinism.ini.html)
+ [Event Sourcing](event-sourcing.ini.html)
+ [Impure Function](impure-function.ini.html)
+ [Effect System](effect-system.ini.html)
+ [Fire-and-forget](fire-and-forget.ini.html)
+ [Global State](global-state.ini.html)
+ [Mutable State](mutable-state.ini.html)

## Related packages

+ [staabm/side-effects-detector](https://packagist.org/packages/staabm/side-effects-detector)
