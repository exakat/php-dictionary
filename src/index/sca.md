# Static Code Analysis (SCA)
Static code analysis, or SCA or static analysis, analyzes the source code: it reports possible bugs, conventions violations, incorrect structures, vulnerabilities, versions or OS portability incompatibilities, etc. 

PHP includes static code analysis, by reporting a wide range of errors before executing the code, at linting time. Then, the other errors are reported at execution time. SCA works in-between these two phases: after the code compiles, but before it is executed. 

SCA is usually invoked manually, during development time, at commit time, to avoid pushing incorrect code, and in CI/CD pipelines, to ensure it was correctly run.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sca.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sca.html","name":"Static Code Analysis (SCA)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:48:49 +0000","dateModified":"Fri, 14 Aug 2026 08:48:49 +0000","description":"Static code analysis, or SCA or static analysis, analyzes the source code: it reports possible bugs, conventions violations, incorrect structures, vulnerabilities, versions or OS portability incompatibilities, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sca.html"]}],"alternateName":["static-code-analysis","static-analysis"],"keywords":["acronym","tool","static analysis"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/audit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autocompletion.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssa.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tool.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phpstan.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/psalm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-flow-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semantic-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/symbolic-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern-based-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/docblock.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/linting.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ci.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Static_program_analysis"},{"@type":"CreativeWork","name":"How to Perform Static Code Analysis in PHP?","url":"https:\/\/www.geeksforgeeks.org\/php\/how-to-perform-static-code-analysis-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sca"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Static_program_analysis)**
## See Also

+ [How to Perform Static Code Analysis in PHP?](https://www.geeksforgeeks.org/php/how-to-perform-static-code-analysis-in-php/)

## Related

+ [Analysis](analysis.html)
+ [Audit](audit.html)
+ [Autocompletion](autocompletion.html)
+ [Static Single Assignment Form (SSA)](ssa.html)
+ [Tool](tool.html)
+ [Type Checking](type-checking.html)
+ [Static Application Security Testing (SAST)](sast.html)
+ [PHPStan](phpstan.html)
+ [Psalm](psalm.html)
+ [Control Flow Analysis](control-flow-analysis.html)
+ [Data Flow Analysis (DFA)](data-flow-analysis.html)
+ [Semantic Analysis](semantic-analysis.html)
+ [Symbolic Analysis](symbolic-analysis.html)
+ [Pattern-Based Analysis](pattern-based-analysis.html)
+ [Docblock](docblock.html)
+ [Linting](linting.html)
+ [Continuous Integration (CI)](ci.html)

## Related packages

+ [phpstan/phpstan](https://packagist.org/packages/phpstan/phpstan)
+ [phan/phan](https://packagist.org/packages/phan/phan)
+ [psalm/psalm](https://packagist.org/packages/psalm/psalm)
+ [exakat/exakat](https://packagist.org/packages/exakat/exakat)
+ [mago/mago](https://packagist.org/packages/mago/mago)
