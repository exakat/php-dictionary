# Exit
``exit()`` and ``die()`` terminates the current execution.

``exit()`` is a language construct, and since PHP 8.4, it is also a function too. 

After the end of execution, the registered shutdown functions and destructors are executed. ``finally`` blocks are  not executed.

They do not have access to the output stream ``php://output`` anymore, so ``echo`` doesn't work; but it may still write in files or database, if the connection is still open.

``exit()`` uses its argument to return its execution status. It is transmitted to the original caller of the application. When the argument is a string, it is displayed before ending the process.
```php
<?php

    $total = 0;
    for($i = 0; $i < 10; ++$i) {
        $total += $i;
        
        if ($i == 5) {
            exit($total);
        }
    }

?>
```

## See Also

+ [PHP | exit( ) Function](https://www.geeksforgeeks.org/php-exit-function/)
+ [PHP | die() & sleep() functions](https://medium.com/@dominic_55284/php-die-sleep-functions-7e766f9900e4)

Related : [Language Construct](Language Construct), [Shutdown Function](Shutdown Function), [Destructor](Destructor), [Finally](Finally), [Propagation](Propagation), [Return Value](Return Value), [set_error_handler()](set_error_handler()), [Testable](Testable)
