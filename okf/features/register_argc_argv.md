---
type: "directive"
title: "register_argc_argv"
description: "This directive controls the availability of the ``$argv`` and ``$argc`` PHP native variables."
resource: "https://www.php.net/manual/en/ini.core.php#ini.register-argc-argv"
tags: ["directive"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# register_argc_argv

This directive controls the availability of the ``$argv`` and ``$argc`` PHP native variables. By default, the directive is active and the variables are available.

```php
<?php

    if (ini_get('register_argc_argv')) {
        var_dump($argv);
    } else {
        print '$argv and $argc are disabled.';
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/ini.core.php#ini.register-argc-argv](https://www.php.net/manual/en/ini.core.php#ini.register-argc-argv)

## See Also
- [Register_argc_argv: A Detailed Look at Its Significance and Use in PHP](https://www.mydreams.cz/en/hosting-wiki/10316-register-argc-argv-a-detailed-look-at-its-significance-and-use-in-php.html)

## Related
- [$argv](/features/$argv.md)
- [$argc](/features/$argc.md)
- [Directives](/features/directive.md)

