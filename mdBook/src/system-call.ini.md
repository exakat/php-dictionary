# System Call
A system call is a call to an operating system function. Those calls are done with the ``shell_exec()``, ``system()`` and ``exec()`` functions; and the `` \` `` back tick operators.
```php
<?php

    // list files
    $list = shell_exec('ls -1');

?>
```

## See Also

+ [Web Shells 101 Using PHP (Web Shells Part 2)](https://www.acunetix.com/blog/articles/web-shells-101-using-php-introduction-web-shells-part-2/)

Related : [System](System), [System](System), [exec](exec), [Shell Exec](Shell Exec), [Webshell](Webshell)
