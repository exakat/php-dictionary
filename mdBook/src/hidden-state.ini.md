# Hidden State
Hidden state is state that exists in a program and influences its behavior but is not visible or accessible from the current scope.

Hidden state arises from: static properties of classes, as they persist for the lifetime of the request, modified anywhere; static variables; singleton instances; readonly properties; buffered output ``ob_start()``; the internal pointer of arrays; file handles; extension-level state, e.g., the last regex error from ``preg_last_error()``; and objects passed by reference that are mutated inside functions.

Hidden state is a common source of hard-to-reproduce bugs: the same function called twice with identical arguments may produce different results because some invisible state changed between the two calls. It also makes code difficult to test in isolation.

Unlike implicit state, which is about undeclared inputs, hidden state refers specifically to state that is not visible from the calling context.
```php
<?php

    class Counter {
        private static int $count = 0; // hidden state: shared across all instances
    
        public static function increment(): void {
            self::$count++;
        }
    
        public static function get(): int {
            return self::$count;
        }
    }
    
    Counter::increment();
    // Somewhere else in the codebase...
    Counter::increment();
    
    echo Counter::get(); // 2 — but caller may not know it was called twice

?>
```

## See Also

+ [Avoiding Hidden State in PHP](https://phpunit.readthedocs.io/en/10.5/test-isolation.html)

Related : [State](State), [Implicit State](Implicit State), [Implicit](Implicit), [Stateful](Stateful), [Global Variables](Global Variables), [$GLOBALS]($GLOBALS), [Appeasement Pattern](Appeasement Pattern), [Distributed State](Distributed State)
