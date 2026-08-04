# debug_backtrace()
``debug_backtrace()`` is a PHP native function that generates a backtrace.

``debug_backtrace()`` is used for inline debugging, or to collect more information before logging errors.

``debug_backtrace()`` returns a dataset concerning the current situation of execution. It does not display anything: that function is either custom made, or devoted to ``debug_print_backtrace()``.

```php
<?php

    function foo() {
        print_r(debug_backtrace());
        /** 
        Array
(
    [0] => Array
        (
            [file] => /tmp.php
            [line] => 7
            [function] => foo
            [args] => Array
                (
                )

        )

)
*/
    }
    
    foo();

?>
```

## See Also

+ [debug_print_backtrace](https://www.php.net/manual/en/function.debug-print-backtrace.php)

Related : [print_r()](print_r()), [Trace](Trace), [var_dump()](var_dump())
