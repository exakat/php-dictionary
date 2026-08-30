# $argv
``$argv`` is a PHP variable that contains an array of the arguments passed to the PHP script, in the command line. ``$argv`` is not defined when PHP is run in a webserver.

``$argv`` is not a superglobal: it has to be imported in a non-global scope with the ``global`` keyword.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24argv.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24argv.html","name":"$argv","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"$argv is a PHP variable that contains an array of the arguments passed to the PHP script, in the command line","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24argv.html"]}],"keywords":["php variable"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24argc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24globals.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cli.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/register_argc_argv.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/reserved.variables.argv.php"},{"@type":"CreativeWork","name":"Get Command-Line Arguments With PHP $argv or getopt()","url":"https:\/\/code.tutsplus.com\/get-command-line-arguments-with-php-argv-or-getopt--cms-39201t"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"$argv"}]}]}</script>
```php
<?php

    print_r($argv);

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.argv.php)**
## See Also

+ [Get Command-Line Arguments With PHP $argv or getopt()](https://code.tutsplus.com/get-command-line-arguments-with-php-argv-or-getopt--cms-39201t)

## Related

+ [$argc]($argc.html)
+ [PHP Variables](php-variable.html)
+ [global Scope](global.html)
+ [$GLOBALS]($globals.html)
+ [Command Line Interface (CLI)](cli.html)
+ [register\_argc\_argv](register_argc_argv.html)
