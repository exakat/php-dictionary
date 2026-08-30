---
type: "extension"
title: "Library Loading"
description: "PHP has a modular structure, which allows it to load extensions."
resource: "https://www.php.net/manual/en/function.dl.php"
tags: ["engine", "extension"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Library Loading

PHP has a modular structure, which allows it to load extensions. The extensions may be part of PHP at compilation time, and always available: this is the case for ``core``, or ``string``. 

On the other hand, some extensions are loaded dynamically, with the ``dl()`` function. This is done during execution. It usually has an impact on performance, and security, and was restricted to be used only in command line, not on web servers.

```php
<?php

    if (!extension_loaded('sqlite3')) {
        dl('sqlite3.so');
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/function.dl.php](https://www.php.net/manual/en/function.dl.php)

## See Also
- [extension_loaded()](https://www.php.net/manual/en/function.extension-loaded.php)
- [enable_dl directive](https://www.php.net/manual/en/ini.core.php#ini.enable-dl)

## Related
- [Extensions](/features/extension.md)
- [Foreign Function Interface (FFI)](/features/ffi.md)

