# fnmatch()
``fnmatch()`` is a matching native function: it applies the shell wildcard patterns to a string, and returns if it matches or not.

Wildcards include: 

+ ``*`` for anything
+ ``?`` for zero or one character
+ ``[]`` for a range of characters
+ ``!`` to negate characters in a bracket syntax
+ `` \ `` as the escape character

The search is case sensitive.

This function is useful to emulate a common system of search.

Simpler search tools include ``str_contains()`` and ``strpos()``, and more complex include ``preg_match()``.

```php
<?php

    $message = 'PHP rocks';
    if (fnmatch('*r[oi]cks', $message)) {
      echo 'But, of course...';
    }

?>
```

## See Also

+ [Understanding and Implementing PHP's fnmatch() Function](https://reintech.io/blog/understanding-implementing-php-fnmatch-function)

Related : [str_contains()](str_contains()), [strpos](strpos), [Preg_match](Preg_match), [Star *](Star *), [Bang !](Bang !), [Square Brackets](Square Brackets), [Question Mark ?](Question Mark ?), [Backslash \](Backslash \)
