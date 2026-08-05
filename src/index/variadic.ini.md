# Variadic
Three dots, aka ellipsis, is an operator to spread or collect array values. 

Applied to an array, it spreads the values of the array as distinct elements.

Used in a function signature, it collects all the values into one array.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/variadic.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/variadic.ini.html","name":"Variadic","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Three dots, aka ellipsis, is an operator to spread or collect array values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Variadic.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Variable Arguments](variable-argument.ini.html)
+ [Array Spread](array-spread.ini.html)
+ [Ellipsis](ellipsis.ini.html)
+ [Unpacking](unpacking.ini.html)
+ [Unpacking](unpack.ini.html)
+ [Arbitrary Number Of Argument](arbitrary-argument.ini.html)
+ [func\_get\_args()](func_get_args.ini.html)
+ [Wildcard](wildcard.ini.html)
