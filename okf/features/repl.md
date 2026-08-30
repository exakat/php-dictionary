---
type: "acronym"
title: "Read Eval Print Loop (REPL)"
description: "PHP's REPL mode, or Read-Eval-Print Loop, is an interactive shell that allows to execute PHP code line by line and see immediate results."
resource: "https://www.php.net/manual/en/features.commandline.interactive.php"
tags: ["acronym", "engine"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Read Eval Print Loop (REPL)

PHP's REPL mode, or Read-Eval-Print Loop, is an interactive shell that allows to execute PHP code line by line and see immediate results. It's useful for testing code snippets, debugging, and experimenting with PHP functions without creating separate files.

This mode is also called the interactive mode. It is started, on command line, by calling PHP with the ``-a`` option: ``>php -a``. The mode is ended by calling ``quit``.

```php
$ php -a
Interactive shell

php > echo 5+3;
8
php > quit
$
```

## Documentation
- [https://www.php.net/manual/en/features.commandline.interactive.php](https://www.php.net/manual/en/features.commandline.interactive.php)

## See Also
- [Creating a PHP REPL for learning purposes](https://medium.com/@dat.tm24/creating-a-php-repl-for-learning-purposes-d90a6a717195)
- [Boris, A tiny, but robust REPL for PHP.](https://github.com/borisrepl/boris)
- [Say Hello to Boris: A Better REPL for PHP](https://www.sitepoint.com/say-hello-to-boris-a-better-repl-for-php/)

## Related
- [Webserver](/features/webserver.md)
- [Server Application Programming Interface (SAPI)](/features/sapi.md)
- [Command Line Interface (CLI)](/features/cli.md)
- [Readline](/features/readline.md)

## Details
- Packagist: [psy/psysh](https://packagist.org/packages/psy/psysh)
- Packagist: [d11wtq/boris](https://packagist.org/packages/d11wtq/boris)

