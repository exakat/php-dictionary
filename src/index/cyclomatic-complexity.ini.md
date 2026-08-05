# Cyclomatic Complexity
Cyclomatic complexity is a software metric of the complexity of a program.

This metric measure the number of decisions happening within the code. Those decisions are commands such as If/then, loops, or ternary operators.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cyclomatic-complexity.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cyclomatic-complexity.ini.html","name":"Cyclomatic Complexity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 23 Jun 2026 11:45:46 +0000","dateModified":"Tue, 23 Jun 2026 11:45:46 +0000","description":"Cyclomatic complexity is a software metric of the complexity of a program","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Cyclomatic Complexity.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Metrics](metrics.ini.html)
+ [Cognitive Complexity](cognitive-complexity.ini.html)
+ [Complexity](complexity.ini.html)

## Related packages

+ [phpmetrics/phpmetrics](https://packagist.org/packages/phpmetrics/phpmetrics)
