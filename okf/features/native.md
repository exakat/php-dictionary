---
type: "concept"
title: "Native"
description: "A feature is called native or built-in when it is part of the standard installation of PHP."
resource: "https://www.php.net/manual/en/funcref.php"
tags: ["concept", "php engine"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Native

A feature is called native or built-in when it is part of the standard installation of PHP. For example, ``.``, dot operator for concatenation, or the ``stdClass`` class are native to PHP.

On the other hand, a feature is custom: that is, when defined by the developer or a PHP extension.

```php
<?php

    // This is a native function
    $s = strtolower($s);
    
    // This is not a native function : it comes from an extension
    $rar_arch = RarArchive::open('latest_winrar.rar');

?>
```

## Documentation
- [https://www.php.net/manual/en/funcref.php](https://www.php.net/manual/en/funcref.php)

## See Also
- [The 100 PHP functions in 2022](https://www.exakat.io/en/the-100-php-functions-in-2022/)

## Related
- [Userland](/features/userland.md)
- [Dynamic Loading](/features/dynamic-loading.md)
- [Foreign Function Interface (FFI)](/features/ffi.md)
- [PHP Constants](/features/php-constant.md)
- [PHP Variables](/features/php-variable.md)

