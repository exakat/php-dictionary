---
type: "PHP Feature"
title: "$_ENV"
description: "The ``$_ENV`` variable is a special superglobal variable that is used to retrieve the environment values."
resource: "https://www.php.net/manual/en/reserved.variables.environment.php"
tags: ["php variable", "superglobal", "recommendation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# $_ENV

The ``$_ENV`` variable is a special superglobal variable that is used to retrieve the environment values. 

The ``$_ENV`` variable is an associative array where the keys are the global variables and the values are the corresponding values. 

``$_ENV`` is a superglobal: it is always available, in every scope.

Values inside ``$_ENV`` are always strings. 

The values in the ``$_ENV`` are collected at the start of the script, and do not change during the lifetime of the script. To get an up-to-date value, the function ``getenv()`` is preferable.

The content of the ``$_ENV`` array varies from installation to installation: there is no default list of keys in that array. It entirely depends on the underlying system.

```php
<?php

    // Displays the name of the user
    echo $_ENV['USER'];

    print_r($_ENV);
    // Results is similar to this 
    /**
    Array
    (
        [TERM] => xterm
        [PATH] => /usr/bin:/bin
        [LANG] => C
        [SHELL] => /bin/sh
        [MAIL] => /var/mail/nobody
        [LOGNAME] => nobody
        [USER] => nobody
        [HOME] => /tmp
    )
    */

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.variables.environment.php](https://www.php.net/manual/en/reserved.variables.environment.php)

## See Also
- [Environment Variables in PHP: A Practical Guide](https://envmanager.com/blog/environment-variables-in-php)

## Related
- [$_GET](/features/$_get.md)
- [$_COOKIE](/features/$_cookie.md)
- [$_POST](/features/$_post.md)
- [$_REQUEST](/features/$_request.md)
- [$_FILES](/features/$_FILES.md)
- [$_SERVER](/features/$_server.md)
- [$GLOBALS](/features/$globals.md)
- [Superglobal Variables](/features/superglobal.md)
- [getenv()](/features/getenv.md)

