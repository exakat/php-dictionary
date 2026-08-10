# Variadic
Three dots, aka ellipsis, is an operator to spread or collect array values. 

Applied to an array, it spreads the values of the array as distinct elements.

Used in a function signature, it collects all the values into one array.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variadic.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variadic.html","name":"Variadic","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Three dots, aka ellipsis, is an operator to spread or collect array values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Variadic.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Variadic"}]}]}</script>
```php
<?php

$array = [1, 2, 3];

// same as foo(0, 1,2, 3);
foo(0, ...$array);


function foo($special, ...$others) {
    // with the above call
    // $special === 0
    // $others === [1, 2, 3, 4]
}

?>
```

**[Documentation](https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list)**
## See Also

+ [Variadic Function in PHP](https://dev.to/sharminshanta/variadic-function-in-php-49c1)

## Related

+ [Variable Arguments](variable-argument.html)
+ [Array Spread](array-spread.html)
+ [Ellipsis](ellipsis.html)
+ [Unpacking](unpacking.html)
+ [Unpacking](unpack.html)
+ [Arbitrary Number Of Argument](arbitrary-argument.html)
+ [func\_get\_args()](func_get_args.html)
+ [Wildcard](wildcard.html)
