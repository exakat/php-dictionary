# Cognitive Complexity
Cognitive complexity is a way of measuring how difficult a piece of code is for a human to understand. Unlike metrics that focus purely on structure or execution paths, cognitive complexity tries to reflect the mental effort required to read, follow, and reason about code.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cognitive-complexity.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cognitive-complexity.html","name":"Cognitive Complexity","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 10:17:05 +0000","dateModified":"Fri, 28 Aug 2026 10:17:05 +0000","description":"Cognitive complexity is a way of measuring how difficult a piece of code is for a human to understand","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cognitive-complexity.html"]}],"keywords":["complexity","static analysis"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cyclomatic-complexity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/complexity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metrics.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/streamlining.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Cognitive_complexity"},{"@type":"CreativeWork","name":"SonarSource: Cognitive Complexity, a new way of measuring understandability","url":"https:\/\/www.sonarsource.com\/docs\/CognitiveComplexity.pdf"},{"@type":"CreativeWork","name":"Cyclomatic complexity","url":"https:\/\/en.wikipedia.org\/wiki\/Cyclomatic_complexity"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cognitive-complexity"}]}]}</script>
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
## See Also

+ [SonarSource: Cognitive Complexity, a new way of measuring understandability](https://www.sonarsource.com/docs/CognitiveComplexity.pdf)
+ [Cyclomatic complexity](https://en.wikipedia.org/wiki/Cyclomatic_complexity)

## Related

+ [Cyclomatic Complexity](cyclomatic-complexity.html)
+ [Complexity](complexity.html)
+ [Metrics](metrics.html)
+ [Streamlining](streamlining.html)

## Related packages

+ [rarst/phpcs-cognitive-complexity](https://packagist.org/packages/rarst/phpcs-cognitive-complexity)
+ [tomasvotruba/cognitive-complexity](https://packagist.org/packages/tomasvotruba/cognitive-complexity)
