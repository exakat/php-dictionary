# PHPStan
PHPStan is a static analysis tool for PHP that finds bugs without running the code, by reading the source, its type declarations, and its docblocks, and checking them for consistency.

PHPStan is able to:

+ Detect type errors, such as calling a method that does not exist or passing the wrong type to a function
+ Understand the generics-like docblock type language, like ``list<Order>``, ``array<string, Money>``, used across the PHP ecosystem
+ Enforce increasingly strict checking through numbered rule levels
+ Be extended with custom rules and framework-specific extensions
+ Run in continuous integration to catch regressions before deployment.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phpstan.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phpstan.html","name":"PHPStan","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 06:37:52 +0000","dateModified":"Thu, 13 Aug 2026 06:37:52 +0000","description":"PHPStan is a static analysis tool for PHP that finds bugs without running the code, by reading the source, its type declarations, and its docblocks, and checking them for consistency","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/PHPStan.html"]}],"keywords":["tool","development","brand"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/psalm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/docblock.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-parametricity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ci.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/linting.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/phpstan.org\/"},{"@type":"CreativeWork","name":"PHPStan rule levels","url":"https:\/\/phpstan.org\/user-guide\/rule-levels"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"phpstan"}]}]}</script>
**[Documentation](https://phpstan.org/)**
## See Also

+ [PHPStan rule levels](https://phpstan.org/user-guide/rule-levels)

## Related

+ [Static Code Analysis (SCA)](static-analysis.html)
+ [Psalm](psalm.html)
+ [Docblock](docblock.html)
+ [Type Checking](type-checking.html)
+ [Type Parametricity](type-parametricity.html)
+ [Continuous Integration (CI)](ci.html)
+ [Linting](linting.html)

## Related packages

+ [phpstan/phpstan](https://packagist.org/packages/phpstan/phpstan)
