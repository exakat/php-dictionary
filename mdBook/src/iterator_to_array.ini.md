# iterator_to_array()
``iterator_to_array()`` converts Iterators and Generators into an array. The iterator is entirely run, and each yielded value is stored in the resulting array.

While iterators play a similar role to arrays, they are not typed the same way. Sometimes, it might be necessary to pass an array rather than the iterator to a method. 

``iterator_to_array()`` may use a lot of memory: iterators often save memory by emitting values one by one, instead of creating them before running some more code. Here, ``iterator_to_array()`` runs the iterator and create the values before the next step.

``iterator_to_array()`` attempts to run infinite generators, until PHP runs out of memory.
```php
<?php

    function foo(): Generator {
        yield 1;
        yield 2;
        yield 3;
    }
    
    print_r(iterator_to_array(foo()));

?>
```

Related : [Iterator](Iterator), [Array, []](Array, []), [Generator](Generator), [Yield](Yield), [ArrayObject](ArrayObject)
