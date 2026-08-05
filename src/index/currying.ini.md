# Currying
Currying is the transformation of a function that takes multiple arguments into a sequence of functions that each take a single argument. The name comes from mathematician Haskell Curry.

In a language with native currying, calling a multi-argument function with fewer arguments than it expects does not produce an error: it returns a new function that expects the remaining arguments. This allows building specialised functions from general ones with no extra syntax.

Native currying is available in Haskell, F#, OCaml, and Erlang, where all functions are curried by default. Scala and Kotlin support it explicitly.

PHP does not support currying natively. It can be approximated by returning closures manually, but there is no syntactic or runtime support.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/currying.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/currying.ini.html","name":"Currying","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 08:06:01 +0000","dateModified":"Thu, 02 Jul 2026 08:06:01 +0000","description":"Currying is the transformation of a function that takes multiple arguments into a sequence of functions that each take a single argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Currying.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Manual simulation of currying with closures
    $add = fn($x) => fn($y) => $x + $y;

    $add5 = $add(5);
    echo $add5(3); // 8

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Currying)**
## See Also

+ [Currying in Haskell](https://wiki.haskell.org/Currying)
+ [Currying in F#](https://learn.microsoft.com/en-us/dotnet/fsharp/introduction-to-functional-programming/first-class-functions)

## Related

+ [Partial Function](partial-function.ini.html)
+ [Anonymous Function](anonymous-function.ini.html)
+ [Arrow Functions](arrow-function.ini.html)
+ [Functional Programming](functional-programming.ini.html)
+ [Closure](closure.ini.html)
