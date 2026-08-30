---
type: "PHP Feature"
title: "__DIR__"
description: "``__DIR__`` holds the directory of the current file."
resource: "https://www.php.net/manual/en/language.constants.magic.php"
tags: ["magic constant"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __DIR__

``__DIR__`` holds the directory of the current file.

It is equivalent to ``dirname(__FILE__)``. The directory name does not have a trailing slash unless it is the root directory.

When used inside an include, the directory of the included file is returned.

This constant is case insensitive, and may be used with any combination of uppercase and lowercase.

```php
<?php

    // Assume file is at /var/www/html/index.php
    echo __DIR__; // /var/www/html

    // Useful for requiring files relative to current script
    require __DIR__ . '/config.php';

?>
```

## Documentation
- [https://www.php.net/manual/en/language.constants.magic.php](https://www.php.net/manual/en/language.constants.magic.php)

## See Also
- [PHP Magic Constants - Tutorial Republic](https://www.tutorialrepublic.com/php-tutorial/php-magic-constants.php)
- [PHP: dirname - Manual](https://www.php.net/manual/en/function.dirname.php)

## Related
- [Magic Constants](/features/magic-constant.md)
- [__FILE__](/features/__file__.md)
- [__LINE__](/features/__line__.md)
- [dirname](/features/dirname.md)
- [Special Constant](/features/special-constant.md)

