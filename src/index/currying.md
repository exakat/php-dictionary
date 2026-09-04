# Currying
Currying is the transformation of a function that takes multiple arguments into a sequence of functions that each take a single argument. The name comes from mathematician Haskell Curry.

In a language with native currying, calling a multi-argument function with fewer arguments than it expects does not produce an error: it returns a new function that expects the remaining arguments. This allows building specialised functions from general ones with no extra syntax.

Native currying is available in Haskell, F#, ``OCaml``, and ``Erlang``, where all functions are curried by default. Scala and Kotlin support it explicitly.

PHP does not support currying natively. It can be approximated by returning closures manually, but there is no syntactic or runtime support.

Because building a curried function usually starts from partial application, the two are sometimes referred to jointly as partial application currying.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/currying.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/currying.html","name":"Currying","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 02 Sep 2026 16:41:00 +0000","dateModified":"Wed, 02 Sep 2026 16:41:00 +0000","description":"Currying is the transformation of a function that takes multiple arguments into a sequence of functions that each take a single argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/currying.html"]}],"alternateName":["partial-application-currying"],"keywords":["not supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/partial-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/partial-application.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrow-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/functional-programming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Currying"},{"@type":"CreativeWork","name":"Currying in Haskell","url":"https:\/\/wiki.haskell.org\/Currying"},{"@type":"CreativeWork","name":"Currying in F#","url":"https:\/\/learn.microsoft.com\/en-us\/dotnet\/fsharp\/introduction-to-functional-programming\/first-class-functions"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"currying"}]}]}</script>
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
+ [Functional Programming (FP)](functional-programming.html)
+ [Closure](closure.html)
