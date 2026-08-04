# Recursive Array
A recursive array is an array that contains a reference to itself. It is a legit construction, although it introduces a loop, between an element and the original variable. This has impact on traversing the array, in particular to count or to compare the array.
```php
<?php
    $a = [1, 2, 3 => &$a];

    print_r($a);
    
    /**
    Array
(
    [0] => 1
    [1] => 2
    [3] => Array
 *RECURSION*
)
*/
?>
```

Related : [References](References), [Array, []](Array, []), [Recursion](Recursion), [RecursiveArrayIterator](RecursiveArrayIterator)
