---
type: "PHP Feature"
title: "Anonymous Catch"
description: "Traditionally, the catch statement requires specifying both an Exception class and an identifier variable to hold the caught exception."
resource: "https://www.php.net/manual/en/language.exceptions.php"
tags: ["rfc", "feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Anonymous Catch

Traditionally, the catch statement requires specifying both an Exception class and an identifier variable to hold the caught exception.

PHP 8.0 introduced a new language construct that makes the identifier variable optional, allowing for a fully anonymous catch statement. This means there is no need to specify a variable to hold the caught exception.

The motivation behind this proposal is to simplify exception handling code, especially in cases where there is no need to use the caught exception object. It leads to cleaner and more concise code, especially when the specific details of the exception are not interesting and can be handled generically.

```php
<?php

    try {
        $a / 0;
    } catch (DivisionByZero) {
    
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.exceptions.php](https://www.php.net/manual/en/language.exceptions.php)

## See Also
- [PHP RFC: Support for anonymous catches](https://wiki.php.net/rfc/anonymous_catch)

## Related
- [Catch](/features/catch.md)
- [Exception](/features/exception.md)
- [Try-catch](/features/try-catch.md)
- [Anonymous](/features/anonymous.md)

## Details
- PHP since: 8.0

