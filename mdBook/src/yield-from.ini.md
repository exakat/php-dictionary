# yield from Keyword
The ``yield from`` keyword is used to delegate the iteration control of one generator to another. It was introduced in version 7.0 as part of the generator delegation feature. 

This keyword allows to create more maintainable and modular code by reusing the code logic of one generator within another.

Generator delegation works with another generators, ``Traversable`` objects, and arrays.
```php
<?php

    function inner() {
        yield 1; // key 0
        yield 2; // key 1
        yield 3; // key 2
    }
    function gen() {
        yield 0; // key 0
        yield from inner(); // keys 0-2
        yield 4; // key 1
    }
    // pass false as second parameter to get an array [0, 1, 2, 3, 4]
    var_dump(iterator_to_array(gen()));

?>
```

## See Also

+ [How to Use Yield and Generators in PHP](https://code.tutsplus.com/tutorials/how-to-use-yield-and-generators-in-php--cms-39200)

Related : [Yield](Yield), [Generator](Generator), [Traversable](Traversable), [Array, []](Array, []), [Jump](Jump), [range()](range()), [Stealth Generator](Stealth Generator)
