---
type: "exception"
title: "ValueError"
description: "A ``ValueError`` is thrown when the type of an argument is correct but the value of it is incorrect."
resource: "https://www.php.net/manual/en/class.valueerror.php"
tags: ["error", "exception", "native class"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# ValueError

A ``ValueError`` is thrown when the type of an argument is correct but the value of it is incorrect. 

It is a PHP error, and not an exception, it is thrown by PHP native functions.

```php
<?php

    $hexadecimal = 'a37334';
    
    // -2 is not a valid number base : it should be 2 or more.
    // Argument #2 ($from_base) must be between 2 and 36 (inclusive)
    echo base_convert($hexadecimal, 0, 2);
    
    // Third argument is for the starting offset. Here, this is beyond the end of the string
    // as such, the offset has a valid type (integer), but its value is not correct (out of range)
    $a = strpos("p", "php", 16);

?>
```

## Documentation
- [https://www.php.net/manual/en/class.valueerror.php](https://www.php.net/manual/en/class.valueerror.php)

## See Also
- [PHP 8.0: New ValueError Error Exception](https://php.watch/versions/8.0/ValueError)

## Related
- [Error](/features/error.md)
- [Exception](/features/exception.md)
- [json_decode()](/features/json_decode.md)

