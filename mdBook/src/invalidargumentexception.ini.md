# InvalidArgumentException
``InvalidArgumentException`` is an ``Exception`` thrown when an argument is not of the expected type. It is a ``LogicException``, and it may be thrown when using SPL classes.
```php
<?php

    function foo(string $a) {}
    
    // OK
    foo("abc");
    
    // KO : invalid argument
    foo(12);

?>
```

## See Also

+ [How to Handle InvalidArgument Exception in PHP](https://rollbar.com/blog/php-invalidargumentexception/)

Related : [LogicException](LogicException)
