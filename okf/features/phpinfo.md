---
type: "PHP Feature"
title: "phpinfo()"
description: "``phpinfo()`` is one of the most famous PHP functions."
resource: "https://www.php.net/manual/en/function.phpinfo"
tags: ["native function", "configuration", "famous"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# phpinfo()

``phpinfo()`` is one of the most famous PHP functions. It outputs information about PHP's configuration and compilation, in HTML format.

By default, ``phpinfo()`` prints the PHP version, the operating system it runs on, the build date, the compiler used, the Server API, and the full list of loaded extensions with each of their own settings. It also lists every directive currently defined in ``php.ini``, along with its local and master value, the configured include path, environment variables, HTTP headers of the current request, and PHP's license information. An optional integer argument, made of the ``INFO_*`` constants combined with a bitwise OR, restricts the output to a subset of these sections, such as ``INFO_MODULES`` or ``INFO_VARIABLES``; the default is ``INFO_ALL``.

``phpinfo()`` has existed since PHP 4, and is frequently one of the first functions used to verify that PHP is correctly installed and configured on a server, traditionally by dropping a single-line ``<?php phpinfo(); ?>`` file and requesting it through a browser.

Leaving such a file accessible on a production server is a well-known security risk: it discloses the absolute file paths, loaded extensions and their versions, and configuration details, such as ``disable_functions`` or ``open_basedir``, that an attacker can use to fingerprint the server and look for known vulnerabilities matching that exact configuration. For this reason, static analyzers and security scanners typically flag any call to ``phpinfo()`` left in deployed code.

```php
<?php

    // Show all information, defaults to INFO_ALL
    phpinfo();

?>
```

## Documentation
- [https://www.php.net/manual/en/function.phpinfo](https://www.php.net/manual/en/function.phpinfo)

## See Also
- [Part 1/3: Understanding phpinfo() — The Accidental Goldmine](https://medium.com/@cybersecplayground/part-1-3-understanding-phpinfo-the-accidental-goldmine-c662da63a3c7)
- [Pretty PHP Info: A Modern Replacement for `phpinfo()`](https://laravel-news.com/pretty-phpinfo)
- [Offensive Internet Posture](https://bruceediger.com/posts/offensive-machine/)

## Related
- [Leak](/features/leak.md)
- [php.ini](/features/php.ini.md)

## Details
- PHP since: 4.0

