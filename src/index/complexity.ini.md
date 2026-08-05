# Complexity
Complexity refers to how difficult the code is to understand, maintain, test, and modify. It may be objectively measured, but also subjectively estimated.

Complexity is measured with cyclomatic complexity, cognitive complexity, algorithmic complexity. 

Complexity increases when:

+ Code takes many decisions in one context
+ Logic is deeply nested
+ Responsibilities are mixed and matched
+ Behavior is not obvious, and includes magic
+ Code is not readable
+ Naming is confusing

Non-complex code tends to:

+ Have small functions
+ Clear naming
+ Limited branching
+ Avoid exploding combinaisons as much as possible

Code complexity applies to all programming languages, and is not specific to PHP.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/complexity.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/complexity.ini.html","name":"Complexity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 28 Jun 2026 10:35:34 +0000","dateModified":"Sun, 28 Jun 2026 10:35:34 +0000","description":"Complexity refers to how difficult the code is to understand, maintain, test, and modify","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Complexity.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Cyclomatic_complexity)**
## See Also

+ [Code Complexity: An In-Depth Explanation and Metrics](https://blog.codacy.com/code-complexity)
+ [What is Code Complexity?](https://jellyfish.co/library/code-complexity/)

## Related

+ [Cognitive Complexity](cognitive-complexity.ini.html)
+ [Cyclomatic Complexity](cyclomatic-complexity.ini.html)
+ [Algorithmic Complexity](algorithmic-complexity.ini.html)

## Related packages

+ [sebastian/complexity](https://packagist.org/packages/sebastian/complexity)
+ [phpmetrics/phpmetrics](https://packagist.org/packages/phpmetrics/phpmetrics)
