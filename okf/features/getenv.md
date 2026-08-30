---
type: "PHP Feature"
title: "getenv()"
description: "``getenv()`` is a PHP native function that reads the value of an environment variable."
resource: "https://www.php.net/manual/en/function.getenv.php"
tags: ["native function", "os"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# getenv()

``getenv()`` is a PHP native function that reads the value of an environment variable. Called with a name, it returns that variable's value, or ``false`` if it is not set. Called with no argument, it returns an associative array of every currently available environment variable.

Unlike the ``$_ENV`` superglobal, whose content is collected once at the start of the script and depends on the ``variables_order`` directive, ``getenv()`` always queries the environment directly, so it reflects changes made during execution, for example with ``putenv()``.

When PHP runs under a SAPI such as FPM or FastCGI, ``getenv()`` returns the value set by the SAPI itself, even if ``putenv()`` was used to override it locally; passing ``true`` as the second, ``local_only``, argument restricts the lookup to locally-set values.

```php
<?php

    // read a single environment variable
    $home = getenv('HOME');

    // read every environment variable
    $env = getenv();

    putenv('MY_VARIABLE=42');
    echo getenv('MY_VARIABLE'); // 42

?>
```

## Documentation
- [https://www.php.net/manual/en/function.getenv.php](https://www.php.net/manual/en/function.getenv.php)

## See Also
- [Use of getenv() function in PHP](https://linuxhint.com/use-of-getenv-function-in-php/)

## Related
- [$_ENV](/features/$_env.md)
- [Environment Variables](/features/environment-variable.md)
- [Environment](/features/environment.md)
- [$_SERVER](/features/$_server.md)

