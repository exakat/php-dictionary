# Static Code Analysis (SCA)
Static code analysis, or SCA, analyze the source code: it reports possible bugs, conventions violations, incorrect structures, vulnerabilities, versions or OS portability incompatibilities, etc. 

PHP includes static code analysis, by reporting a wide range of errors before executing the code, at linting time. Then, the other errors are reported at execution time. SCA works in-between these two phases: after the code compiles, but before it is executed. 

SCA is usually invoked manually, during development time, at commit time, to avoid pushing incorrect code, and in CI/CD pipelines, to ensure it was correctly run.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sca.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sca.html","name":"Static Code Analysis (SCA)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 23 Jun 2026 11:45:46 +0000","dateModified":"Tue, 23 Jun 2026 11:45:46 +0000","description":"Static code analysis, or SCA, analyze the source code: it reports possible bugs, conventions violations, incorrect structures, vulnerabilities, versions or OS portability incompatibilities, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Static Code Analysis (SCA).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Static_program_analysis)**
## Related

+ [Analysis](analysis.ini.html)
+ [Audit](audit.ini.html)
+ [Autocompletion](autocompletion.ini.html)
+ [Static Application Security Testing (SAST)](sast.ini.html)
+ [Static Single Assignment Form (SSA)](ssa.ini.html)
+ [Tool](tool.ini.html)
+ [Type Checking](type-checking.ini.html)

## Related packages

+ [phpstan/phpstan](https://packagist.org/packages/phpstan/phpstan)
+ [phan/phan](https://packagist.org/packages/phan/phan)
+ [psalm/psalm](https://packagist.org/packages/psalm/psalm)
+ [exakat/exakat](https://packagist.org/packages/exakat/exakat)
+ [mago/mago](https://packagist.org/packages/mago/mago)
