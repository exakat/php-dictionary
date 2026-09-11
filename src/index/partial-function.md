# Partial Function
A partial function is a function that has some parameters already known, and still needs some final ones before execution. The function is said ``partial``, as it can be executed a little, but not fully.

In general, the partial function is built on with a closure or an arrow function, and the locally available parameters. It is then passed to other contexts, which holds the rest of the arguments.

Partial function is related to functional programming.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/partial-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/partial-function.html","name":"Partial Function","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 10 Sep 2026 20:18:51 +0000","dateModified":"Thu, 10 Sep 2026 20:18:51 +0000","description":"A partial function is a function that has some parameters already known, and still needs some final ones before execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/partial-function.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/functional-programming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/partial-application.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Partial_application"},{"@type":"CreativeWork","name":"Currying - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Currying"},{"@type":"CreativeWork","name":"The Difference Between Currying and Partially Applied Functions","url":"https:\/\/dzone.com\/articles\/difference-between-currying-amp-partially-applied"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.35","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"partial-function"}]}]}</script>
```php
<?php

function trumpet($trunk, $tusk, $ivory) { return $trunk + $tusk + $ivory; }

$trunk = 1;
$tusk = 2;
$partial = function ($ivory) use ($trunk, $tusk) { return trumpet($trunk, $tusk, $ivory); };

// as an arrow function
$partial = fn ($ivory) => trumpet($trunk, $tusk, $ivory);

forage($partial);

function forage(callable $partial) {
    $ivory = fetchDataSomewhere();

    return $partial($ivory);
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Partial_application)**
## See Also

+ [Currying - Wikipedia](https://en.wikipedia.org/wiki/Currying)
+ [The Difference Between Currying and Partially Applied Functions](https://dzone.com/articles/difference-between-currying-amp-partially-applied)

## Related

+ [Functional Programming (FP)](functional-programming.html)
+ [Partial Application](partial-application.html)

## Related packages

+ [react/partial](https://packagist.org/packages/react/partial)
