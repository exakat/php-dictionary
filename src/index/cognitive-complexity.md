# Cognitive Complexity
Cognitive complexity is a way of measuring how difficult a piece of code is for a human to understand. Unlike metrics that focus purely on structure or execution paths, cognitive complexity tries to reflect the mental effort required to read, follow, and reason about code.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cognitive-complexity.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cognitive-complexity.html","name":"Cognitive Complexity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 23 Jun 2026 11:45:46 +0000","dateModified":"Tue, 23 Jun 2026 11:45:46 +0000","description":"Cognitive complexity is a way of measuring how difficult a piece of code is for a human to understand","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Cognitive Complexity.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Cyclomatic Complexity](cyclomatic-complexity.ini.html)
+ [Complexity](complexity.ini.html)
+ [Metrics](metrics.ini.html)
+ [Streamlining](streamlining.ini.html)

## Related packages

+ [rarst/phpcs-cognitive-complexity](https://packagist.org/packages/rarst/phpcs-cognitive-complexity)
+ [tomasvotruba/cognitive-complexity](https://packagist.org/packages/tomasvotruba/cognitive-complexity)
