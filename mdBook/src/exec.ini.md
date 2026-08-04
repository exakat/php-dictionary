# exec
``exec()`` use used to execute a command with the underlying operating system. It is the equivalent of ``shell_exec()`` and back-ticks. 

``exec()`` has specific arguments to collect both the result of the command, one line per element in an array, and the resulting code. This differs from ``shell_exec()``, which only returns the result, and as a string.
```php
<?php

$dir = exec('ls', $result);
print_r($result);

?>
```

## See Also

+ [PHP shell_exec() vs exec() Function](https://www.geeksforgeeks.org/php/php-shell_exec-vs-exec-function/)

Related : [shell_exec()](shell_exec()), [Back-tick](Back-tick), [Back-tick](Back-tick), [Execution](Execution), [Shell Exec](Shell Exec), [System Call](System Call)
