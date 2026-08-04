# Local Variable
A local variable is a variable in a method or a function. It is in the local scope, and is not available anywhere else.

A local variable is created by assigning it a value in a method, using the ``static`` keyword, or using the ``extract()`` function. It might be removed by the ``unset()`` function.
```php
<?php

    function foo() {
        $localVariable = 1;
        // ... more code
    }
    
    function goo() {
        // this variable is distinct from the one in foo()
        $localVariable = 2;
        // ... more code
    }

?>
```

## See Also

+ [PHP local variable](https://www.educba.com/local-variable-in-php/)

Related : [Static Variables](Static Variables), [extract()](extract()), [unset()](unset()), [Global Variables](Global Variables), [Superglobal Variables](Superglobal Variables)
