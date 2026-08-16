# Multiple Return Values
Some languages, such as Go and Lua, let a function return several values directly, separated by commas, without wrapping them in a container: ``func divide(a, b int) (int, int) { return a/b, a%b }``. The caller receives them individually, typically by assigning each to its own variable in one statement.

This differs from returning a single composite value such as a tuple or array, because the values are not boxed: the function's declared return arity is part of its signature, and the caller can discard trailing values it does not need.

PHP functions return exactly one value. Returning several values requires wrapping them in an array, a tuple-like list, or an object, and then destructuring the result with list assignment: ``[$q, $r] = divmod($a, $b);``. The array is a real value that exists at runtime, is allocated like any other array, and the ``return`` statement itself only ever returns that one array.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multiple-return-value.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multiple-return-value.html","name":"Multiple Return Values","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:48:33 +0000","dateModified":"Thu, 06 Aug 2026 05:48:33 +0000","description":"Some languages, such as Go and Lua, let a function return several values directly, separated by commas, without wrapping them in a container: func divide(a, b int) (int, int) { return a\/b, a%b }","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Multiple Return Values.html"]}],"keywords":["concept","function","not-supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/list.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/destructuring.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tuple.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Return_statement#Multiple_return_values"},{"@type":"CreativeWork","name":"Return statement in Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Return_statement"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"multiple-return-value"}]}]}</script>
```php
<?php

    function divmod(int $a, int $b): array {
        return [intdiv($a, $b), $a % $b];
    }
    
    [$quotient, $remainder] = divmod(7, 2);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Return_statement#Multiple_return_values)**
## See Also

+ [Return statement in Wikipedia](https://en.wikipedia.org/wiki/Return_statement)

## Related

+ [Return](return.html)
+ [List](list.html)
+ [Destructuring](destructuring.html)
+ [Tuple](tuple.html)
+ [Array, []](array.html)
