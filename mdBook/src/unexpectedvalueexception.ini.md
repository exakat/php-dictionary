# UnexpectedValueException
The ``UnexpectedValueException`` exception is thrown if a value does not match with a set of expected values.

This happens when the value is not in a list of expected values, or if it is outside an interval of validity.

This exception is mainly thrown by the Phar and SPL extensions.
```php
<?php

function foo(string $s) {
    if (empty($s)) {
       throw new UnexpectedValueException('Foo() expects a non-empty string');
    }
}
?>
```

Related : [Exception](Exception), [Phar](Phar), [Standard PHP Library (SPL)](Standard PHP Library (SPL))
