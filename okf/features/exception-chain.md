---
type: "exception"
title: "Chaining Exceptions"
description: "Exception chaining is the act of re-throwing a caught exception, with a new type, and with a reference to the previous exception."
resource: "https://en.wikipedia.org/wiki/Exception_chaining"
tags: ["exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Chaining Exceptions

Exception chaining is the act of re-throwing a caught exception, with a new type, and with a reference to the previous exception.

To provide the previous exception to a new exception, use the third parameter of the ``Exception`` constructor. Also, always provide a third argument to custom exceptions.

The previous exception is available with the ``Exception::getPrevious()`` method of the ``Exception`` class.

```php
<?php

class myException extends \Exception {
    function __construct(string $message, $code, \Throwable $exception) {
        parent::__construct($message, $code, $exception);
    }
}

try {
    doSomething();
} catch(\Exception $e) {
    // chaining exception
    throw new myException('doSomething failed', 0, $e);
}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Exception_chaining](https://en.wikipedia.org/wiki/Exception_chaining)

## See Also
- [Best practices for PHP exception handling](https://moxio.com/blog/best-practices-for-php-exception-handling/)

## Related
- [throw](/features/throw.md)
- [Try-catch](/features/try-catch.md)
- [Exception](/features/exception.md)
- [Chaining](/features/chaining.md)

