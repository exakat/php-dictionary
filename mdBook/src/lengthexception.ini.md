# LengthException
The LengthException exception is thrown if a length is invalid.

LengthException are defined by the SPL extension. It is not natively used.
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
