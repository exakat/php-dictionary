# Cognitive Complexity
Cognitive complexity is a way of measuring how difficult a piece of code is for a human to understand. Unlike metrics that focus purely on structure or execution paths, cognitive complexity tries to reflect the mental effort required to read, follow, and reason about code.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cognitive-complexity.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cognitive-complexity.html","name":"Cognitive Complexity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 23 Jun 2026 11:45:46 +0000","dateModified":"Tue, 23 Jun 2026 11:45:46 +0000","description":"Cognitive complexity is a way of measuring how difficult a piece of code is for a human to understand","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Cognitive Complexity.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cognitive-complexity"}]}]}</script>
```php
<?php

if ($a) {
    if ($b) {
        if ($c) {
            // hard to follow
        }
    }
}

if ($a == 1) {}
elseif ($a === 2) {}
elseif ($a === 3) {}
elseif ($a === 4) {}
else {}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Cognitive_complexity)**
## Related

+ [Cyclomatic Complexity](cyclomatic-complexity.html)
+ [Complexity](complexity.html)
+ [Metrics](metrics.html)
+ [Streamlining](streamlining.html)

## Related packages

+ [rarst/phpcs-cognitive-complexity](https://packagist.org/packages/rarst/phpcs-cognitive-complexity)
+ [tomasvotruba/cognitive-complexity](https://packagist.org/packages/tomasvotruba/cognitive-complexity)
