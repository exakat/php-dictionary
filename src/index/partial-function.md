# Partial Function
A partial function is a function that has some parameters already known, and still needs some final ones before execution. The function is said ``partial``, as it can be executed a little, but not fully.

In general, the partial function is built on with a closure or an arrow function, and the locally available parameters. It is then passed to other contexts, which holds the rest of the arguments.

Partial function is related to functional programming.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/partial-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/partial-function.html","name":"Partial Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:48:24 +0000","dateModified":"Thu, 06 Aug 2026 05:48:24 +0000","description":"A partial function is a function that has some parameters already known, and still needs some final ones before execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Partial Function.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"partial-function"}]}]}</script>
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

+ [Functional Programming](functional-programming.html)
+ [Partial Application](partial-application.html)

## Related packages

+ [react/partial](https://packagist.org/packages/react/partial)
