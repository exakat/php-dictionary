# Return Value
Return value is the value returned by a method or function call. 

That value may be typed with a data type. In that case, each call to ``return`` must return that type.

It may also be typed with ``never``, in case the method doesn't return anything. In that case, it would never ends, throw an exception or kill the execution.

A value is returned with the keyword ``return``. When no such command is used, for example when a method doesn't have a return command and reach the end of the method's body, then ``null`` is returned.
```php
<?php

function foo() : int {
    return 1;
}

function goo() : never {
    throw new Exception("Error");
}

function hoo() : void {
    echo __METHOD__;
    // No return value
}

// returns null
function bar() { }

?>
```

Related : [Null](Null), [Never Type](Never Type), [Void](Void), [throw](throw), [Exit](Exit), [Infinite Loop](Infinite Loop)
