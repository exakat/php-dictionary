---
type: "exception"
title: "Exception Handler"
description: "The exception handler is a default or custom function, which is called once an exception has exhausted all available ``try-catch`` blocks."
resource: "https://www.php.net/manual/en/function.set-exception-handler.php"
tags: ["exception", "handler", "error"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Exception Handler

The exception handler is a default or custom function, which is called once an exception has exhausted all available ``try-catch`` blocks.

The execution stops once the handler has been called: as such, it is possible to log or display information related to debugging. 

The exception handler is different from the try/catch block: the latter allows the execution to carry on, when the exception is processed.

```php
<?php

    function exception_handler(Throwable $exception) {
        echo "Uncaught exception: " , $exception->getMessage(), "\n";
    }
    
    set_exception_handler('exception_handler');
    
    throw new Exception('Uncaught Exception');
    echo "Not Executed\n";

?>
```

## Documentation
- [https://www.php.net/manual/en/function.set-exception-handler.php](https://www.php.net/manual/en/function.set-exception-handler.php)

## See Also
- [Exceptions](https://www.php.net/manual/en/language.exceptions.php)
- [Throwable interface](https://www.php.net/manual/en/class.throwable.php)

## Related
- [Try-catch](/features/try-catch.md)
- [PHP Handlers](/features/handler.md)
- [Error Handler](/features/error-handler.md)

