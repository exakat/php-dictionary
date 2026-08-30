---
type: "PHP Feature"
title: "__LINE__"
description: "``__LINE__`` holds the current line number in the current file."
resource: "https://www.php.net/manual/en/language.constants.magic.php"
tags: ["magic constant"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __LINE__

``__LINE__`` holds the current line number in the current file.

The line numbers starts at 1. It is always available.

``__LINE__`` is often used with ``__FILE__``, which holds the file name.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combination of uppercase and lower case.

```php
<?php

    function foo() {
        echo __FILE__.':'.__LINE__; // /tmp/test.php:4
    }

foo();

?>
```

## Documentation
- [https://www.php.net/manual/en/language.constants.magic.php](https://www.php.net/manual/en/language.constants.magic.php)

## See Also
- [PHP Magic Constants - DevChunks](https://devchunks.com/php/php-magic-constants)
- [PHP's Magic Constants: __LINE__, __FILE__, __FUNCTION__, __CLASS__, and __METHOD__](https://davidwalsh.name/php-magic-constants)

## Related
- [Magic Constants](/features/magic-constant.md)
- [__FILE__](/features/__file__.md)

