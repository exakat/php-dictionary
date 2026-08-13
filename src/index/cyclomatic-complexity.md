# Cyclomatic Complexity
Cyclomatic complexity is a software metric of the complexity of a program.

This metric measure the number of decisions happening within the code. Those decisions are commands such as If/then, loops, or ternary operators.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cyclomatic-complexity.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cyclomatic-complexity.html","name":"Cyclomatic Complexity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 23 Jun 2026 11:45:46 +0000","dateModified":"Tue, 23 Jun 2026 11:45:46 +0000","description":"Cyclomatic complexity is a software metric of the complexity of a program","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Cyclomatic Complexity.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cyclomatic-complexity"}]}]}</script>
```php
<?php

    function foo() {
        if ($a) {
    
        } else {
    
        }
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Cyclomatic_complexity)**
## See Also

+ [Cyclomatic Complexity for PHP](https://pdepend.org/documentation/software-metrics/cyclomatic-complexity.html)

## Related

+ [Metrics](metrics.html)
+ [Cognitive Complexity](cognitive-complexity.html)
+ [Complexity](complexity.html)

## Related packages

+ [phpmetrics/phpmetrics](https://packagist.org/packages/phpmetrics/phpmetrics)
