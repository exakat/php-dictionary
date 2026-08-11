# Three Dots
Three dots, is an operator with several usages and names.

+ Variadic, to make the last parameter collect all arguments in an array
+ Spread, to expand elements of an array into arguments positions
+ Spread in array, to merge several arrays in one
+ Closure creator, when used standalone in a methodcall.

The various features of this operator were introduced in different PHP versions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/three-dots.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/three-dots.html","name":"Three Dots","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Three dots, is an operator with several usages and names","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Three Dots.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"three-dots"}]}]}</script>
```php
<?php

$a = [2, 3];
// equivalent to [1, 2, 3], or array_merge([1], $a);
$array = [1, ...$a];

// spread operator, in function call
// same as foo(0, 1, 2, 3);
foo(0, ...$array);

// variadic argument (the last one)
function foo($special, ...$others) {
    // with the above call
    // $special === 0
    // $others === [1, 2, 3, 4]
}

// PHP 8.1
$closure = strlen(...);
echo $closure('Ab'); // display 2, by calling strlen

?>
```

**[Documentation](https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list)**
## See Also

+ [The many uses of ... ellipsis operator in PHP](https://www.amitmerchant.com/the-many-uses-of-ellipsis-operator-in-php/)
+ [Variadic Function in PHP](https://medium.com/@sharminshanta/variadic-function-in-php-5e16c36c2727/)

## Related

+ [Variable Arguments](variable-argument.html)
+ [Array Spread](array-spread.html)
+ [Ellipsis](ellipsis.html)
+ [First Class Callable](first-class-callable.html)
