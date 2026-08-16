# Linting
Linting is the process to turn the Text file that holds the source code, into tokens. During this first phase, PHP applies some checks, and report anything that makes no sense.

After linting, the code is processed further before reaching the status of opcode, where it can be executed. 

Linting is an option of the PHP CLI: ``-l``. 

Linting is sometimes mistaken with ``compile``: linting is a part of a compilation. Since, PHP has this only step between the code and the execution, with ``eval()`` or the PHP CLI, linting is often considered as compiling. Reality is more complex.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/linting.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/linting.html","name":"Linting","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 06:37:01 +0000","dateModified":"Thu, 13 Aug 2026 06:37:01 +0000","description":"Linting is the process to turn the Text file that holds the source code, into tokens","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Linting.html"]}],"alternateName":["lint"],"keywords":["concept","source code","static analysis"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compile.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bug.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enum-case.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tool.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-editor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/git-hook.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phpstan.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rector.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sca.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tokenizer.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Lint_(software)"},{"@type":"CreativeWork","name":"PHP linting for PHP version compatibility","url":"https:\/\/docs.wpvip.com\/wordpress-on-vip\/php\/versions\/php-linting-scans\/"},{"@type":"CreativeWork","name":"PHP 8.3: PHP CLI Lint (php -l) supports linting multiple files at once","url":"https:\/\/php.watch\/versions\/8.3\/cli-lint-multiple-files"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"linting"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Lint_(software))**
## See Also

+ [PHP linting for PHP version compatibility](https://docs.wpvip.com/wordpress-on-vip/php/versions/php-linting-scans/)
+ [PHP 8.3: PHP CLI Lint (php -l) supports linting multiple files at once](https://php.watch/versions/8.3/cli-lint-multiple-files)

## Related

+ [Compile](compile.html)
+ [Analysis](analysis.html)
+ [Bug](bug.html)
+ [Enumeration Case](enum-case.html)
+ [Tool](tool.html)
+ [PHP Editor](php-editor.html)
+ [Git Hook](git-hook.html)
+ [PHPStan](phpstan.html)
+ [Rector](rector.html)
+ [Static Code Analysis (SCA)](sca.html)
+ [Tokenizer](tokenizer.html)

## Related packages

+ [php-parallel-lint/php-code-style](https://packagist.org/packages/php-parallel-lint/php-code-style)
