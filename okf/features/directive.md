---
type: "directive"
title: "Directives"
description: "Directives are the configuration option of PHP."
resource: "https://www.php.net/manual/en/ini.list.php"
tags: ["directive"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Directives

Directives are the configuration option of PHP. They may be set in the ``php.ini`` file, in HTTP server files like ``.htaccess``, or accessed via the ``ini_get()`` and ``ini_set()`` native calls. 

Directives are also set by PHP extensions or by PHP applications.

```php
<?php

    echo 'display_errors = ' . ini_get('display_errors') . "\n";
    echo 'register_globals = ' . ini_get('register_globals') . "\n";
    echo 'post_max_size = ' . ini_get('post_max_size') . "\n";
    echo 'post_max_size+1 = ' . (ini_get('post_max_size')+1) . "\n";
    echo 'post_max_size in bytes = ' . return_bytes(ini_get('post_max_size'));

?>
```

## Documentation
- [https://www.php.net/manual/en/ini.list.php](https://www.php.net/manual/en/ini.list.php)

## See Also
- [A Quick Guide to PHP INI Settings](https://gridpane.com/kb/a-quick-guide-to-php-ini-settings/)
- [Back to Basics: Managing PHP Configuration php.ini Directives](https://phpbuilder.com/back-to-basics-managing-php-configuration-php-ini-directives/)

## Related
- [Extensions](/features/extension.md)
- [php.ini](/features/php.ini.md)
- [.htaccess](/features/htaccess.md)
- [Configuration](/features/configuration.md)
- [Enable](/features/enable.md)
- [Flag](/features/flag.md)
- [ini_set()](/features/ini_set.md)
- [html_errors](/features/html_errors.md)
- [max_execution_time](/features/max_execution_time.md)
- [Register Globals](/features/register-globals.md)
- [register_argc_argv](/features/register_argc_argv.md)
- [serialize_precision](/features/serialize_precision.md)

