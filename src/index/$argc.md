# $argc
``$argc`` is a predefined variable that holds the number of arguments passed to the script when it is executed from the command line. It represents the argument count, hence the name ``$argc``.

When a PHP script is run from the command line, the script's filename is counted as the first argument, and any additional arguments passed after the filename are also counted. The value of ``$argc`` is an integer indicating the total number of arguments.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24argc.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24argc.html","name":"$argc","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"``$argc`` is a predefined variable that holds the number of arguments passed to the script when it is executed from the command line","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/$argc.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"$argc"}]}]}</script>
```php
<?php

    echo $argc;

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.argc.php)**
## See Also

+ [Arguments handling](https://riptutorial.com/php/example/786/argument-handling)

## Related

+ [$argv]($argv.html)
+ [PHP Variables](php-variable.html)
+ [Command Line Interface (CLI)](cli.html)
+ [register\_argc\_argv](register_argc_argv.html)
