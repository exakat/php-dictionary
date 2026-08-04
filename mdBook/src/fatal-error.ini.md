# Fatal Error
Fatal error is a type of PHP error, which ends the execution of the application. Fatal errors may be caught before ending the execution with a ``catch`` clause on ``Error``.
```php
<?php

    try {
        1 + [];
    } catch (Error $e) {
        print A fatal error was caught.;
    }

?>
```

## See Also

+ [A Guide to: PHP Fatal errors](https://trunc.org/learning/php-fatal-errors)

Related : [Deprecation](Deprecation), [Error](Error), [Error Handling](Error Handling), [Exception](Exception), [Notice](Notice), [Try-catch](Try-catch), [Warning](Warning), [Lint, Won't Execute](Lint, Won't Execute), [Method Compatibility](Method Compatibility)
