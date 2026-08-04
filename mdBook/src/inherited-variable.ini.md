# Inherited Variable
An inherited variable is a variable that was passed to a closure via the ``use`` clause in the closure definition.

The variable is said 'inherited', as it is extracted from the context at definition time, and not passed as parameter, at call time.

Contrary to parameters, inherited variable cannot be typed.
```php
<?php

$inherited = 'yes';

$closure = function() use ($inherited) {
    return $inherited;
};

foo($closure);

function foo($closure) {
    $inherited = 'no'; // This is local to the foo function
    
    echo $closure(); // display yes 
}

?>
```

Related : [Closure](Closure), [Parameter](Parameter)
