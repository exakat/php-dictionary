# Partial Function
A partial function is a function that has some parameters already known, and still needs some final ones before execution. The function is said ``partial``, as it can be executed a little, but not fully.

In general, the partial function is built on with a closure or an arrow function, and the locally available parameters. It is then passed to other contexts, which holds the rest of the arguments.

Partial function is related to functional programming.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/partial-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/partial-function.html","name":"Partial Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:48:24 +0000","dateModified":"Thu, 06 Aug 2026 05:48:24 +0000","description":"A partial function is a function that has some parameters already known, and still needs some final ones before execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Partial Function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function foo($a, $b, $c) { return $a + $b + $c; }

$a = 1;
$b = 2;
$partial = function ($c) use ($a, $b) { return foo($a, $b, $c); };

// as an arrow function
$partial = fn ($c) => foo($a, $b, $c);

goo($partial);

function goo(callable $partial) {
    $c = fetchDataSomewhere();
    
    return $partial($c);
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Partial_application)**
## Related

+ [Functional Programming](functional-programming.ini.html)
+ [Partial Application](partial-application.ini.html)

## Related packages

+ [react/partial](https://packagist.org/packages/react/partial)
