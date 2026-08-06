# $argv
``$argv`` is a PHP variable that contains an array of the arguments passed to the PHP script, in the command line. ``$argv`` is not defined when PHP is run in a webserver.

``$argv`` is not a superglobal: it has to be imported in a non-global scope with the ``global`` keyword.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24argv.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24argv.html","name":"$argv","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:32:54 +0000","dateModified":"Fri, 24 Jul 2026 15:32:54 +0000","description":"``$argv`` is a PHP variable that contains an array of the arguments passed to the PHP script, in the command line","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/$argv.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    print_r($argv);

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.argv.php)**
## See Also

+ [Get Command-Line Arguments With PHP $argv or getopt()](https://code.tutsplus.com/get-command-line-arguments-with-php-argv-or-getopt--cms-39201t)

## Related

+ [$argc]($argc.ini.html)
+ [PHP Variables](php-variable.ini.html)
+ [global Scope](global.ini.html)
+ [$GLOBALS]($globals.ini.html)
+ [Command Line Interface (CLI)](cli.ini.html)
+ [register\_argc\_argv](register_argc_argv.ini.html)
