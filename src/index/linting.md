# Linting
Linting is the process to turn the Text file that holds the source code, into tokens. During this first phase, PHP applies some checks, and report anything that makes no sense.

After linting, the code is processed further before reaching the status of opcode, where it can be executed. 

Linting is an option of the PHP CLI: ``-l``. 

Linting is sometimes mistaken with ``compile``: linting is a part of a compilation. Since, PHP has this only step between the code and the execution, with ``eval()`` or the PHP CLI, linting is often considered as compiling. Reality is more complex.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/linting.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/linting.html","name":"Linting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:52:00 +0000","dateModified":"Sat, 11 Jul 2026 14:52:00 +0000","description":"Linting is the process to turn the Text file that holds the source code, into tokens","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Linting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Lint_(software))**
## See Also

+ [PHP linting for PHP version compatibility](https://docs.wpvip.com/wordpress-on-vip/php/versions/php-linting-scans/)
+ [PHP 8.3: PHP CLI Lint (php -l) supports linting multiple files at once](https://php.watch/versions/8.3/cli-lint-multiple-files)

## Related

+ [Compile](compile.ini.html)
+ [Analysis](analysis.ini.html)
+ [Bug](bug.ini.html)
+ [Enumeration Case](enum-case.ini.html)
+ [Tool](tool.ini.html)
+ [PHP Editor](php-editor.ini.html)

## Related packages

+ [php-parallel-lint/php-code-style](https://packagist.org/packages/php-parallel-lint/php-code-style)
