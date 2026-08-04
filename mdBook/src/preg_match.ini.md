# Preg_match
``preg_match()`` searches a string for a match to the regular expression given in pattern.

``preg_match()`` only returns the first found match is returned. When several matchs are expected, use this function recursively with the ``$offset`` pattern, or call ``preg_match_all()``. 

The first argument is the regex, and the second argument is the string being searched. 

The third argument, when provided, receives the results of the search, if any. It also contains the capturing sub patterns results. The variable content is replaced by an array: references are also lost. When an error occurs, the variable is left intact.

An ``$offset`` argument is available, to start the search beyond the beginning of the string.

``preg_match()`` returns 1 if there is at least on matched string, and 0 otherwise. It also returns ``false`` in case of error during execution, such as invalid regex, or passing backtracking limits. It is recommended to use ``===`` with its result.
```php
<?php

    preg_match('/(a)/i', 'aAba', $r);
    print_r($r); // ['a', 'a']

?>
```

## See Also

+ [PHP string substring detection: powerful application of preg_match](https://global.php.cn/faq/1797073498.html)

Related : [Regular Expression](Regular Expression), [Strpos() Syndrome](Strpos() Syndrome), [fnmatch()](fnmatch()), [str_contains()](str_contains())
