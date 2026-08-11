# Static Code Analysis (SCA)
Static code analysis, or SCA, analyze the source code: it reports possible bugs, conventions violations, incorrect structures, vulnerabilities, versions or OS portability incompatibilities, etc. 

PHP includes static code analysis, by reporting a wide range of errors before executing the code, at linting time. Then, the other errors are reported at execution time. SCA works in-between these two phases: after the code compiles, but before it is executed. 

SCA is usually invoked manually, during development time, at commit time, to avoid pushing incorrect code, and in CI/CD pipelines, to ensure it was correctly run.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sca.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sca.html","name":"Static Code Analysis (SCA)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 23 Jun 2026 11:45:46 +0000","dateModified":"Tue, 23 Jun 2026 11:45:46 +0000","description":"Static code analysis, or SCA, analyze the source code: it reports possible bugs, conventions violations, incorrect structures, vulnerabilities, versions or OS portability incompatibilities, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Static Code Analysis (SCA).html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sca"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Static_program_analysis)**
## Related

+ [Analysis](analysis.html)
+ [Audit](audit.html)
+ [Autocompletion](autocompletion.html)
+ [Static Application Security Testing (SAST)](sast.html)
+ [Static Single Assignment Form (SSA)](ssa.html)
+ [Tool](tool.html)
+ [Type Checking](type-checking.html)

## Related packages

+ [phpstan/phpstan](https://packagist.org/packages/phpstan/phpstan)
+ [phan/phan](https://packagist.org/packages/phan/phan)
+ [psalm/psalm](https://packagist.org/packages/psalm/psalm)
+ [exakat/exakat](https://packagist.org/packages/exakat/exakat)
+ [mago/mago](https://packagist.org/packages/mago/mago)
