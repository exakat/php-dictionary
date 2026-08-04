# BadFunctioncallException
The ``BadFunctioncallException`` exception is thrown if callback refers to an undefined function or if some arguments are missing.

``BadFunctioncallException`` are defined by the SPL extension. It is not natively used.
```php
<?php

function foo(string $s) {
    if (empty($s)) {
       throw new \UnexpectedValueException('Foo() expects a non-empty string');
    }
}
?>
```

Related : [Exception](Exception), [LogicException](LogicException)
