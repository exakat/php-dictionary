# count()
``count()`` is a native PHP function, that returns the number of elements in the argument. 

``count()`` is basically meant to work on arrays: it returns the number of elements in the array. ``count()`` is also able to run recursively, when provided the second argument. 

By extension, ``count()`` works on classes of objects that extends the ``countable`` interface.

It is a Fatal error to call ``count()`` on an object that can't be counted. Use ``is_countable()`` or type validation to make sure the data may be counted.
```php
<?php

echo count([1,2,3]); // 3

echo count([1,2,3, [4, 5]], COUNT_RECURSIVE); // 6 == 4 + 2 

class X implements Countable {
    function count() : int { 
        // arbitrary count
        return 7;
    }
}

echo count(new X); // 7

?>
```

Related : [Countable Interface](Countable Interface), [Array, []](Array, []), [Iterable](Iterable), [Recursion](Recursion), [Multidimensional Array](Multidimensional Array)
