# Partial Function
A partial function is a function that has some parameters already known, and still needs some final ones before execution. The function is said ``partial``, as it can be executed a little, but not fully.

In general, the partial function is built on with a closure or an arrow function, and the locally available parameters. It is then passed to other contexts, which holds the rest of the arguments.

Partial function is related to functional programming.
```php
<?php

function foo($a, $b, $c) { return $a + $b + $c; }

$a = 1;
$b = 2;
$partial = function ($c) use ($a, $b) { return foo($a, $b, $c); };

// as an arrow function
$partial = fn ($c) => foo($a, $b, $c);

goo($partial);

function goo(callable $partial) {
    $c = fetchDataSomewhere();
    
    return $partial($c);
}

?>
```

Related : [Functional Programming](Functional Programming)
