# Backtrace
A backtrace is a snapshot of the callstack at a specific point in the program's execution. This is typically needed when an error or exception occurs.
```php
<?php

    function foo() {
        goo();
    }

    function goo() {
        debug_print_backtrace();
    }

    foo();

    /**
    #0 /in/a4eQc(3): goo()
    #1 /in/a4eQc(10): foo()
    */

?>
```

## See Also

+ [debug_print_backtrace](https://www.php.net/manual/en/function.debug-print-backtrace.php)

Related : [Debugger](Debugger), [Callstack](Callstack)
