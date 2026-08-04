# array_search
``array_search()`` is a native PHP function that searches an array for a value and returns the corresponding key if found, or ``false`` if not found.

It is often used to check if a value exists in an array. When the presence of the value is the main goal of the check, it is advantageously replaced by ``in_array()``. Otherwise, this function is prone to the same trap as ``strpos()``: the returned key may be ``0``, the first element, which is confused with ``false`` in a loose comparison.

``array_search()`` performs a loose comparison by default. Pass ``true`` as the third argument to enable strict comparison.

```php
<?php

    $colors = ['red', 'green', 'blue'];

    if(array_search('red', $colors)) {
        print "Found red.";
    }

    // Error! 'red' is at key 0, which is confused with false
    if(array_search('red', $colors)) {
        print "Found red.";
    }

    // This is OK
    if(array_search('red', $colors) !== false) {
        print "Found red.";
    }

?>
```

## See Also

+ [How to Search in a PHP Associative Array — Fast tips](https://medium.com/@valerio_27709/how-to-search-in-a-php-associative-array-fast-tips-5890cdf818e0)

Related : [Strpos() Syndrome](Strpos() Syndrome), [Identical Operator](Identical Operator), [in_array()](in_array()), [array_find()](array_find()), [array_find_key()](array_find_key()), [array_key_first()](array_key_first()), [Sentinel](Sentinel)
