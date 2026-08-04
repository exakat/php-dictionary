# Trace
A trace is the list of called functions during an execution. It lists all the code that was executed, and helps with debugging.

A trace is automatically calculated with an exception, or the function ``debug_backtrace()``. This shows the stack trace at the error point.

Other tools, like xDebug or php-trace, build the callgraph over the execution of the whole code, not only on errors.
```php
<?php

    function c() {
        throw new Exception(Something went wrong);
    }
    function a() { b(); }
    function b() { c(); }
    
    a();
    
    /**
    Fatal error: Uncaught Exception: Something went wrong in file.php:3
    Stack trace:
    #0 file.php(7): c()
    #1 file.php(11): b()
    #2 file.php(14): a()
    #3 {main}
    */

?>
```

## See Also

+ [Chris-Kol/php-trace](https://github.com/Chris-Kol/php-trace)

Related : [debug_backtrace()](debug_backtrace()), [Audit Trail](Audit Trail), [Xdebug](Xdebug), [Flame Graph](Flame Graph), [Monitoring](Monitoring), [Troubleshoot](Troubleshoot)
