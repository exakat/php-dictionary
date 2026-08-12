# Optimisation
Optimisation is the act of refactoring code to reduce the amount of resources used during execution. Optimisation may target time, as faster execution, memory, as using less of it, or specific resources, such as speeding up recalculations, or reducing the time to reach a result.

Optimisation is called micro-optimisation when the resulting code is both measurably optimized, and in the end, not significant for a specific purpose.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/optimisation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/optimisation.html","name":"Optimisation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:26:50 +0000","dateModified":"Fri, 19 Jun 2026 21:26:50 +0000","description":"Optimisation is the act of refactoring code to reduce the amount of resources used during execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Optimisation.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"optimisation"}]}]}</script>
```php
<?php

// slow code
for($i = 0; $i < count($array); ++$i) {
    doSomething($i);
}

// speed improvement of over 50% of the loop
$nb = count($array);
for($i = 0; $i < $nb; ++$i) {
    doSomething($i);
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Program_optimization)**
## See Also

+ [Optimize Your PHP Code: 8 Functions You Need for Efficient Table Handling](https://sensiolabs.com/blog/2025/optimize-your-php-code-8-functions-you-need-for-efficient-table-handling)

## Related

+ [Performance](performance.html)
+ [Memoization](memoization.html)
+ [Micro-optimisation](micro-optimisation.html)
