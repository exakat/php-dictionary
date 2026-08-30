---
type: "exception"
title: "ArgumentCountError"
description: "``ArgumentCountError`` is thrown when too few arguments are passed to a user-defined or PHP native function or method."
resource: "https://www.php.net/manual/en/class.argumentcounterror.php"
tags: ["error", "exception", "native error"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# ArgumentCountError

``ArgumentCountError`` is thrown when too few arguments are passed to a user-defined or PHP native function or method. This is an error, not an exception.

No exception is raised for extra parameters, as those may still be processed by the method itself.

```php
<?php

    function foo($a) {}
    
    // No error is raised here
    foo(1,2);
    
    // ArgumentCountError is catchable
    try {
        foo();
    } catch (ArgumentCountError) {
        print 'No enough parameters passed.';
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.argumentcounterror.php](https://www.php.net/manual/en/class.argumentcounterror.php)

## See Also
- [Tutorial: Solve PHP uncaught ArgumentCountError: Too few arguments to function](https://www.bestwebframeworks.com/tutorials/php/153/solve-php-uncaught-argumentcounterror-too-few-arguments-to-function/)

## Related
- [throw](/features/throw.md)
- [Try-catch](/features/try-catch.md)

