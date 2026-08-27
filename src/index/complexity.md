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
+ Avoid exploding combinations as much as possible

Code complexity applies to all programming languages, and is not specific to PHP.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/complexity.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/complexity.html","name":"Complexity","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:31:02 +0000","dateModified":"Sat, 08 Aug 2026 14:31:02 +0000","description":"Complexity refers to how difficult the code is to understand, maintain, test, and modify","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/complexity.html"]}],"keywords":["concept","quality","static analysis"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cognitive-complexity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cyclomatic-complexity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/algorithmic-complexity.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Cyclomatic_complexity"},{"@type":"CreativeWork","name":"Code Complexity: An In-Depth Explanation and Metrics","url":"https:\/\/blog.codacy.com\/code-complexity"},{"@type":"CreativeWork","name":"What is Code Complexity?","url":"https:\/\/jellyfish.co\/library\/code-complexity\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"complexity"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Cyclomatic_complexity)**
## See Also

+ [Code Complexity: An In-Depth Explanation and Metrics](https://blog.codacy.com/code-complexity)
+ [What is Code Complexity?](https://jellyfish.co/library/code-complexity/)

## Related

+ [Cognitive Complexity](cognitive-complexity.html)
+ [Cyclomatic Complexity](cyclomatic-complexity.html)
+ [Algorithmic Complexity](algorithmic-complexity.html)

## Related packages

+ [sebastian/complexity](https://packagist.org/packages/sebastian/complexity)
+ [phpmetrics/phpmetrics](https://packagist.org/packages/phpmetrics/phpmetrics)
