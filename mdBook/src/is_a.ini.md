# is_a()
``is_a()`` is a PHP native function, that checks if an object is of a specific class. 

Usually, ``is_a()`` is better replaced by ``instanceof``, which is a PHP operator. The function might be needed to create a closure, though.
```php
<?php

    $object = (object) ['a' => 1];

    var_dump(is_a($object, stdClass::class));

?>
```

## See Also

+ [is_a() versus instanceof](https://php-tips.readthedocs.io/en/latest/tips/is_a_and_instanceof.html)

Related : [instanceof](instanceof), [Type Checking](Type Checking), [Object](Object), [Polymorphism](Polymorphism), [Class](Class), [is_object()](is_object())
