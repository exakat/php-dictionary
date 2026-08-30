---
type: "PHP Feature"
title: "Dynamic Loading"
description: "Dynamic Loading is related to the loading of PHP extensions, at execution time."
resource: "https://www.php.net/manual/en/function.dl.php"
tags: ["dynamic"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Dynamic Loading

Dynamic Loading is related to the loading of PHP extensions, at execution time. 

Most of the time, the extensions are compiled with PHP, and loaded at startup. For development purposes, or for distribution purposes, some libraries may be loaded at execution time, with the ``dl()`` function.

``dl()`` calls are considered bad for performances and for security.

```php
<?php

    // add extra features to PHP
    dl('ldap.so');

?>
```

## Documentation
- [https://www.php.net/manual/en/function.dl.php](https://www.php.net/manual/en/function.dl.php)

## See Also
- [How to Handle Unloaded PHP Extensions at Runtime](https://www.sitepoint.com/php-extension-not-loaded/)
- [Dynamic loading | PHP-CPP](https://www.php-cpp.com/documentation/dynamic-loading)

## Related
- [Dynamic](/features/dynamic.md)
- [Extensions](/features/extension.md)
- [Foreign Function Interface (FFI)](/features/ffi.md)
- [Library](/features/library.md)
- [Native](/features/native.md)
- [Performance](/features/performance.md)
- [Security](/features/security.md)

