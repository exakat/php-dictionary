---
type: "PHP Feature"
title: "$argc"
description: "``$argc`` is a predefined variable that holds the number of arguments passed to the script when it is executed from the command line."
resource: "https://www.php.net/manual/en/reserved.variables.argc.php"
tags: ["php variable"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# $argc

``$argc`` is a predefined variable that holds the number of arguments passed to the script when it is executed from the command line. It represents the argument count, hence the name ``$argc``.

When a PHP script is run from the command line, the script's filename is counted as the first argument, and any additional arguments passed after the filename are also counted. The value of ``$argc`` is an integer indicating the total number of arguments.

```php
<?php

    echo $argc;

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.variables.argc.php](https://www.php.net/manual/en/reserved.variables.argc.php)

## See Also
- [Arguments handling](https://riptutorial.com/php/example/786/argument-handling)

## Related
- [$argv](/features/$argv.md)
- [PHP Variables](/features/php-variable.md)
- [Command Line Interface (CLI)](/features/cli.md)
- [register_argc_argv](/features/register_argc_argv.md)

