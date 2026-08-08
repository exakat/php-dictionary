# Currying
Currying is the transformation of a function that takes multiple arguments into a sequence of functions that each take a single argument. The name comes from mathematician Haskell Curry.

In a language with native currying, calling a multi-argument function with fewer arguments than it expects does not produce an error: it returns a new function that expects the remaining arguments. This allows building specialised functions from general ones with no extra syntax.

Native currying is available in Haskell, F#, OCaml, and Erlang, where all functions are curried by default. Scala and Kotlin support it explicitly.

PHP does not support currying natively. It can be approximated by returning closures manually, but there is no syntactic or runtime support.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/currying.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/currying.html","name":"Currying","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:48:26 +0000","dateModified":"Thu, 06 Aug 2026 05:48:26 +0000","description":"Currying is the transformation of a function that takes multiple arguments into a sequence of functions that each take a single argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Currying.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Currying"}]}]}</script>
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

+ [Partial Function](partial-function.html)
+ [Partial Application](partial-application.html)
+ [Anonymous Function](anonymous-function.html)
+ [Arrow Functions](arrow-function.html)
+ [Functional Programming](functional-programming.html)
+ [Closure](closure.html)
