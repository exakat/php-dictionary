# shell_exec()
``shell_exec()`` executes a command with the underlying operating system. They are the equivalent of the backtick operator `` \` ``.

The command has to be passed as a string. The result is returned also as a string, or a ``null`` when the command fails.
```php
<?php

    $dir = shell_exec('ls');

?>
```

## See Also

+ [Explain the Difference Between shell_exec() and exec() Functions](https://www.geeksforgeeks.org/php/explain-the-difference-between-shell_exec-and-exec-functions/)
+ [PHP shell_exec Function: How to Use It [With Examples]](https://www.linuxscrew.com/php-shell-exec)

Related : [Back-tick](Back-tick), [exec](exec), [Shell Exec](Shell Exec), [Secure Shell (SSH)](Secure Shell (SSH)), [System](System)
