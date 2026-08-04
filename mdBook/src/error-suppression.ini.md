# Error Suppression
Error suppression is achieved with the ``@`` operator placed before an expression. It silences any error, warning, or notice that expression might produce.

Using ``@`` is widely considered bad practice: it hides bugs, degrades performance, and makes debugging harder. Better alternatives include proper validation, try/catch blocks, or a custom error handler.

The ``scream`` extension and ``scream.enabled`` ini directive can disable the ``@`` operator entirely.
```php
<?php

    // Bad practice: silences errors
    $result = @file_get_contents('missing.txt');
    
    // Better: check first
    if (file_exists('missing.txt')) {
        $result = file_get_contents('missing.txt');
    }

?>
```

Related : [Error](Error), [@, No Scream Operator](@, No Scream Operator), [Error Handling](Error Handling), [Operators](Operators), [Error Reporting](Error Reporting), [Appeasement Pattern](Appeasement Pattern), [SplSubject](SplSubject)
