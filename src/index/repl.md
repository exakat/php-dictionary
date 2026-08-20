# Read Eval Print Loop (REPL)
PHP's REPL mode, or Read-Eval-Print Loop, is an interactive shell that allows to execute PHP code line by line and see immediate results. It's useful for testing code snippets, debugging, and experimenting with PHP functions without creating separate files.

This mode is also called the interactive mode. It is started, on command line, by calling PHP with the ``-a`` option: ``>php -a``. The mode is ended by calling ``quit``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/repl.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/repl.html","name":"Read Eval Print Loop (REPL)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"PHP's REPL mode, or Read-Eval-Print Loop, is an interactive shell that allows to execute PHP code line by line and see immediate results","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Read Eval Print Loop (REPL).html"]}],"keywords":["acronym","engine"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/webserver.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sapi.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cli.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readline.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/features.commandline.interactive.php"},{"@type":"CreativeWork","name":"Creating a PHP REPL for learning purposes","url":"https:\/\/medium.com\/@dat.tm24\/creating-a-php-repl-for-learning-purposes-d90a6a717195"},{"@type":"CreativeWork","name":"Boris, A tiny, but robust REPL for PHP.","url":"https:\/\/github.com\/borisrepl\/boris"},{"@type":"CreativeWork","name":"Say Hello to Boris: A Better REPL for PHP","url":"https:\/\/www.sitepoint.com\/say-hello-to-boris-a-better-repl-for-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"repl"}]}]}</script>
```php
$ php -a
Interactive shell

php > echo 5+3;
8
php > quit
$
```

**[Documentation](https://www.php.net/manual/en/features.commandline.interactive.php)**
## See Also

+ [Creating a PHP REPL for learning purposes](https://medium.com/@dat.tm24/creating-a-php-repl-for-learning-purposes-d90a6a717195)
+ [Boris, A tiny, but robust REPL for PHP.](https://github.com/borisrepl/boris)
+ [Say Hello to Boris: A Better REPL for PHP](https://www.sitepoint.com/say-hello-to-boris-a-better-repl-for-php/)

## Related

+ [Webserver](webserver.html)
+ [Server Application Programming Interface (SAPI)](sapi.html)
+ [Command Line Interface (CLI)](cli.html)
+ [Readline](readline.html)

## Related packages

+ [psy/psysh](https://packagist.org/packages/psy/psysh)
+ [d11wtq/boris](https://packagist.org/packages/d11wtq/boris)
