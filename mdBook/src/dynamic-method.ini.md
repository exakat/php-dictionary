# Dynamic Method
A dynamic method is a method which is defined at execution time. 

This is convenient for module systems or SOAP clients, where the actual methods are defined at the remote server.

PHP calls this overloading.
```php
<?php

class X {
    function __call($name, $args) {
        if ($name === 'aaa') { 
            echo 'OK';
            return;
        }
        
        if ($name === 'bbb') { 
            echo 'OK';
            return;
        }

        echo 'KO';
    }
}

$x = new X;
$x->aaa(); // OK
$x->bbb(); // OK
$x->ccc(); // KO

?>
```

## See Also

+ [PHP: Dynamic method calling](https://medium.com/@erlandmuchasaj/php-dynamic-method-calling-3c5dfbe816a2)

Related : [Dynamic](Dynamic), [Overloading](Overloading)
