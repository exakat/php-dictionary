# strpos
``strpos()`` is a built-in PHP function that finds the position of the first occurrence of a string inside another string.

It is often used to check if a string contains another string. When the presence of the string is the main goal of the check, it is advantageously replaced by ``str_contains()``, ``str_start_with()`` or ``str_end_with()``. Otherwise, this function is prone to the ``strpos()`` syndrome, a classic PHP trap.

``strpos()`` has a case-insensitive version called ``stripos()``.

```php
<?php

    if(strpos('abc', 'b')) {
        print "The string contains a `b`.";
    } 
    
    // Error! 'a' is at position 0, which is confused with false
    if(strpos('abc', 'a')) {
        print "The string contains a `b`.";
    } 
    
    // This is OK
    if(strpos('abc', 'a') !== false) {
        print "The string contains a `b`.";
    } 

?>
```

## See Also

+ [Strpos - vulnerability](https://sivaramaaa.github.io/blog/prgm_vuln1.html)

Related : [Strpos() Syndrome](Strpos() Syndrome), [Identical Operator](Identical Operator), [str_contains()](str_contains()), [str_starts_with()](str_starts_with()), [str_ends_with()](str_ends_with()), [Case Sensitivity](Case Sensitivity), [fnmatch()](fnmatch())
