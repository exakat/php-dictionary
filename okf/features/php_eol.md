---
type: "PHP Feature"
title: "PHP_EOL"
description: "``PHP_EOL`` is a native PHP constant that holds the end-of-line sequence used by the operating system PHP is running on."
resource: "https://www.php.net/manual/en/reserved.constants.php"
tags: ["native constant"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PHP_EOL

``PHP_EOL`` is a native PHP constant that holds the end-of-line sequence used by the operating system PHP is running on.

``PHP_EOL`` is ``\n`` on Unix-like systems, macOS included, and ``\r\n`` on Windows. Using ``PHP_EOL`` instead of a hardcoded ``\n`` makes scripts that write plain text files, such as logs or CLI output, produce line endings that match the host platform, which matters for tools that expect the native convention.

``PHP_EOL`` is only useful for output meant to be read on the local machine or by local tools. Text destined for the web, such as HTML output or HTTP headers, should keep using ``\n``, since browsers and network protocols are not affected by the server's own line ending convention.

```php
<?php

echo 'First line' . PHP_EOL . 'Second line';

// Writing a log file with platform-native line endings
file_put_contents('app.log', 'Started' . PHP_EOL, FILE_APPEND);

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.constants.php](https://www.php.net/manual/en/reserved.constants.php)

## See Also
- [How to Set End of Line in PHP With PHP_EOL](https://www.delftstack.com/howto/php/php_eol/)
- [When do I use the PHP constant PHP_EOL?](https://stackoverflow.com/questions/128560/when-do-i-use-the-php-constant-php-eol)

## Related
- [Constants](/features/constant.md)
- [PHP_INT_MAX](/features/php_int_max.md)
- [String](/features/string.md)

