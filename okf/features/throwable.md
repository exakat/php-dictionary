---
type: "PHP Feature"
title: "Throwable"
description: "``Throwable`` is a PHP native interface, which is required for any object to be used with thrown, such as ``Exception`` and ``Error``."
resource: "https://www.php.net/manual/en/class.throwable.php"
tags: ["php interface", "php native"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Throwable

``Throwable`` is a PHP native interface, which is required for any object to be used with thrown, such as ``Exception`` and ``Error``.

This interface may be used with catch clauses, to catch everything that is thrown. Yet, this interface cannot be implemented directly. It should be acquired by extending ``Exception``: extending ``Error`` should be avoided.

```php
<?php

class x extends \Exception implements \Throwable {}

throw new X();

?>
```

## Documentation
- [https://www.php.net/manual/en/class.throwable.php](https://www.php.net/manual/en/class.throwable.php)

## See Also
- [PHP: Exception](https://www.php.net/manual/en/class.exception.php)
- [PHP: Error](https://www.php.net/manual/en/class.error.php)

## Related
- [Catch](/features/catch.md)
- [Exception](/features/exception.md)
- [Error](/features/error.md)
- [Type Error](/features/typerror.md)
- [PHP Native Interfaces](/features/php-interface.md)

## Details
- PHP since: 7.0

