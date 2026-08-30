---
type: "exception"
title: "PHP Predefined Exception"
description: "The predefined exceptions are the exceptions that are built-in the PHP engine."
resource: "https://www.php.net/manual/en/reserved.exceptions.php"
tags: ["exception", "php native"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PHP Predefined Exception

The predefined exceptions are the exceptions that are built-in the PHP engine. They are always available, and change from version to version.

```php
<?php

    try {
        throw new RuntimeException('one error!');
    } catch (Exception $e) {
        print "Caught an exception of type ".get_class($e);
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.exceptions.php](https://www.php.net/manual/en/reserved.exceptions.php)

## See Also
- [PHP: SPL Exceptions](https://www.php.net/manual/en/spl.exceptions.php)

## Related
- [throw](/features/throw.md)
- [Try-catch](/features/try-catch.md)
- [Exception](/features/exception.md)

