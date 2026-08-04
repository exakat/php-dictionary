# Invoke
It is possible to invoke an object, that means calling a function built with the object as the function name. 

Invocation is based on the ``__invoke`` magic method.

Being invokable means that an object may be used as a function name.
```php
<?php

class x {
    function __invoke($a) {
        echo 'I am '.$a;
    }
}

$x = new x;
$x('x'); // I am x

?>
```

## See Also

+ [The Magical invoke Method in PHP. Your Clean Code Ally](https://www.juannicolas.eu/the-invoke-method-in-php/)

Related : [Magic Methods](Magic Methods), [__invoke() Method](__invoke() Method)
