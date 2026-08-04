# str_contains()
``str_contains()`` is a PHP native function that checks if a string contains another string.

The function returns a boolean. It is meant to be a replacement to ``strpos()``, which returns the position of the found string, but is often misused.

The search is case sensitive. There is no case insensitive version of ``str_contains()``. This has to be done by setting the strings to the same case first.

The empty string is always found. ``null`` value is not accepted, but still default to empty string ``''``, so ``true``.

```php
<?php

    var_dump(str_contains('abc', '')); // true
    
    var_dump(str_contains('abc', 'a')); // true
    
    var_dump(str_contains('abc', 'A')); // false
    
    var_dump(str_contains('abc', 'd')); // false
    
    var_dump(str_contains('abc', 'abcabc')); // false
    
    var_dump(str_contains('abc', 'abcabc')); // false

?>
```

Related : [Null](Null), [Empty String](Empty String), [fnmatch()](fnmatch()), [Preg_match](Preg_match), [strpos](strpos)
