# Side Effect
A side effect refers to any change in the state of a program or system that occurs when a function or expression is evaluated, beyond simply returning a value. Side effects are actions that affect something outside the function's scope, such as modifying a global variable, reading or writing in database, files or any remote API, display data, modify environment. 

Side effects are a concept of programming in general. It is important in functional programming, where function without a side effect are called pure.

Side effect has also the literal meaning of a consequence to an action or a situation, similar to collateral.
```php
<?php

    // A pure function, with no side effect 
    function foo($a, $b) {
        return $a + $b;
    }
    
    // An impure function
    function goo($a, $b) {
        echo $a;
    }

?>
```

## See Also

+ [side-effects-detector](https://github.com/staabm/side-effects-detector)

Related : [Pure Function](Pure Function), [Functional Programming](Functional Programming), [Determinism](Determinism), [Event Sourcing](Event Sourcing), [Impure Function](Impure Function), [Effect System](Effect System), [Fire-and-forget](Fire-and-forget), [Global State](Global State), [Mutable State](Mutable State)
