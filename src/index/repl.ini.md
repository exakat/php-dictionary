# Read Eval Print Loop (REPL)
PHP's REPL mode, or Read-Eval-Print Loop, is an interactive shell that allows to execute PHP code line by line and see immediate results. It's useful for testing code snippets, debugging, and experimenting with PHP functions without creating separate files.

This mode is also called the interactive mode. It is started, on command line, by calling PHP with the ``-a`` option: ``>php -a``. The mode is ended by calling ``quit``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/repl.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/repl.ini.html","name":"Read Eval Print Loop (REPL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"PHP's REPL mode, or Read-Eval-Print Loop, is an interactive shell that allows to execute PHP code line by line and see immediate results","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Read Eval Print Loop (REPL).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Webserver](webserver.ini.html)
+ [Server Application Programming Interface (SAPI)](sapi.ini.html)
+ [Command Line Interface (CLI)](cli.ini.html)
+ [Readline](readline.ini.html)

## Related packages

+ [psy/psysh](https://packagist.org/packages/psy/psysh)
+ [d11wtq/boris](https://packagist.org/packages/d11wtq/boris)
