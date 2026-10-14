# Code Duplication
Code duplication happens when the same, or nearly the same, block of code is written more than once in a project. Copy and paste is the most common cause, but it also comes from similar functions written independently.

Duplicated code is harder to maintain: a bug fix or a change has to be applied to every copy, and the copies tend to drift apart over time. Duplication is one of the most common code smells.

Two tools help find it:

+ The copy/paste detector, ``phpcpd``, is a PHP tool that scans the source for duplicated blocks and reports the files and line ranges involved. It is a good first pass to measure how much duplication a project has.
+ ``deslop`` finds, ranks and helps fix duplicated code across a codebase, worst offenders first. It gives the most important duplicates to address before the others.

Duplication is not always bad. Some repetition is cheaper than a wrong abstraction, so the goal is to remove the duplication that causes real maintenance costs.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/code-duplication.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/code-duplication.html","name":"Code Duplication","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 14 Oct 2026 15:52:00 +0000","dateModified":"Wed, 14 Oct 2026 15:52:00 +0000","description":"Code duplication happens when the same, or nearly the same, block of code is written more than once in a project","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/code-duplication.html"]}],"alternateName":["copy paste","code clone"],"keywords":["concept","code smell","static analysis","best practice"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dry.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/duplicate.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/code-smell.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wet.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/refactoring.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Duplicate_code"},{"@type":"CreativeWork","name":"phpcpd: PHP Copy\/Paste Detector","url":"https:\/\/github.com\/sebastianbergmann\/phpcpd"},{"@type":"CreativeWork","name":"Refactoring.Guru: Duplicate Code","url":"https:\/\/refactoring.guru\/smells\/duplicate-code"},{"@type":"CreativeWork","name":"Don't repeat yourself","url":"https:\/\/en.wikipedia.org\/wiki\/Don%27t_repeat_yourself"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"code-duplication"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Duplicate_code)**
## See Also

+ [phpcpd: PHP Copy/Paste Detector](https://github.com/sebastianbergmann/phpcpd)
+ [Refactoring.Guru: Duplicate Code](https://refactoring.guru/smells/duplicate-code)
+ [Don't repeat yourself](https://en.wikipedia.org/wiki/Don%27t_repeat_yourself)

## Related

+ [Don't Repeat Yourself (DRY)](dry.html)
+ [Duplicate](duplicate.html)
+ [Code Smell](code-smell.html)
+ [Write Everything Twice (WET)](wet.html)
+ [Refactoring](refactoring.html)

## Related packages

+ [sebastian/phpcpd](https://packagist.org/packages/sebastian/phpcpd)
