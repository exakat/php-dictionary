# Closure
Closures are anonymous functions: functions without a name. They are also supported by the eponymous ``Closure`` class.

They are close to the arrow-functions. They are also created with the ``...`` operator, also known as the first class callable.
```php
<?php

    $closure = function ($a) use ($b) {
        return $a + $b + 1;
    };
    print get_class($closure); // Closure

    $closure2 = strtolower(...);
    print get_class($closure2); // Closure

    $closure3 = fn($a, $b) => $a + $b;
    print get_class($closure3); // Closure

?>
```

## See Also

+ [Closure Optimisation (8.6)](https://wiki.php.net/rfc/closure-optimizations)

Related : [static](static), [Arrow Functions](Arrow Functions), [Anonymous Function](Anonymous Function), [First Class Callable](First Class Callable), [Callables](Callables), [Callbacks](Callbacks), [Anonymous Class](Anonymous Class), [Closure Binding](Closure Binding), [Functions](Functions), [Return](Return), [Sort](Sort), [Use](Use), [Callable Arrays](Callable Arrays), [Array Callback](Array Callback), [Bind](Bind), [Inherited Variable](Inherited Variable), [Closure Class](Closure Class), [Custom Function](Custom Function), [Lexical Variable](Lexical Variable), [Currying](Currying), [Homoiconicity](Homoiconicity), [Meta-object Protocol (MOP)](Meta-object Protocol (MOP)), [Recursion](Recursion)
