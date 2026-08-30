---
type: "acronym"
title: "Server Application Programming Interface (SAPI)"
description: "SAPI stands for Server Application Programming Interface."
resource: "https://docs.php.earth/php/sapi/"
tags: ["acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Server Application Programming Interface (SAPI)

SAPI stands for Server Application Programming Interface. SAPI are the interface between PHP and a supporting platform, such as a web server like ``nginx``, ``apache``, ``caddy``, ... , a debugger like phpdbg, ... or the command line interface.

```php
<?php

echo PHP_SAPI;
echo php_sapi_name();

?>
```

## Documentation
- [https://docs.php.earth/php/sapi/](https://docs.php.earth/php/sapi/)

## See Also
- [Server application programming interface - Wikipedia](https://en.wikipedia.org/wiki/Server_application_programming_interface)
- [PHP, FPM, and Nginx | Servers for Hackers](https://serversforhackers.com/c/php-fpm-and-nginx)

## Related
- [Common Gateway Interface (CGI)](/features/cgi.md)
- [Command Line Interface (CLI)](/features/cli.md)
- [Read Eval Print Loop (REPL)](/features/repl.md)
- [Terminal User Interface (TUI)](/features/tui.md)

