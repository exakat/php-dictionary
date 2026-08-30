---
type: "PHP Feature"
title: "$argv"
description: "``$argv`` is a PHP variable that contains an array of the arguments passed to the PHP script, in the command line."
resource: "https://www.php.net/manual/en/reserved.variables.argv.php"
tags: ["php variable"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# $argv

``$argv`` is a PHP variable that contains an array of the arguments passed to the PHP script, in the command line. ``$argv`` is not defined when PHP is run in a webserver.

``$argv`` is not a superglobal: it has to be imported in a non-global scope with the ``global`` keyword.

```php
<?php

    print_r($argv);

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.variables.argv.php](https://www.php.net/manual/en/reserved.variables.argv.php)

## See Also
- [Get Command-Line Arguments With PHP $argv or getopt()](https://code.tutsplus.com/get-command-line-arguments-with-php-argv-or-getopt--cms-39201t)

## Related
- [$argc](/features/$argc.md)
- [PHP Variables](/features/php-variable.md)
- [global Scope](/features/global.md)
- [$GLOBALS](/features/$globals.md)
- [Command Line Interface (CLI)](/features/cli.md)
- [register_argc_argv](/features/register_argc_argv.md)

