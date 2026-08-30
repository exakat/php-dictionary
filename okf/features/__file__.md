---
type: "PHP Feature"
title: "__FILE__"
description: "``__FILE__`` holds the current file name."
resource: "https://www.php.net/manual/en/language.constants.magic.php"
tags: ["magic constant"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __FILE__

``__FILE__`` holds the current file name.

The file name includes its absolute path, e.g. ``/tmp/path/to/file.txt``. It also uses the file's actual case.

When used without a file, aka in the command line, ``__FILE__`` contains ``Command line code``.

``__FILE__`` is often used with ``__LINE__``, which holds the line number.

``__FILE__`` is also often used with ``__DIR__``, which holds the directory of the file. It is akin to using ``dirname()`` on ``__FILE__``.

This constant is written in uppercase, by convention. It is case-insensitive, and may be used with any combination of uppercase and lowercase.

```php
<?php

    function foo() {
        echo __FILE__; // /tmp/test.php
    }

    foo();

?>
```

## Documentation
- [https://www.php.net/manual/en/language.constants.magic.php](https://www.php.net/manual/en/language.constants.magic.php)

## See Also
- [PHP's Magic Constants: __LINE__, __FILE__, __FUNCTION__, __CLASS__, and __METHOD__](https://davidwalsh.name/php-magic-constants)
- [PHP Magic Constants - Examples of How Magic Constants Work in PHP](https://www.educba.com/php-magic-constants/)

## Related
- [Magic Constants](/features/magic-constant.md)
- [__DIR__](/features/__dir__.md)
- [__LINE__](/features/__line__.md)
- [__METHOD__](/features/__method__.md)
- [dirname](/features/dirname.md)
- [Special Constant](/features/special-constant.md)

