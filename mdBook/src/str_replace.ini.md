# str_replace()
``str_replace()`` is a PHP native function that replaces all occurrences of a search string with a replacement string.

The search and replace arguments may be arrays, allowing several substitutions to be applied in a single call. When arrays are used, each replaced value is rescanned for further matches, which may lead to unexpected double substitutions, unlike ``strtr()``.

The search is case-sensitive. ``str_ireplace()`` is the case-insensitive counterpart.

An optional fourth argument, passed by reference, receives the number of replacements performed.

```php
<?php

    echo str_replace('World', 'PHP', 'Hello World'); // Hello PHP

    // Array of search/replace pairs
    $search  = ['Hello', 'World'];
    $replace = ['Hi', 'Earth'];
    echo str_replace($search, $replace, 'Hello World'); // Hi Earth

    // Case-insensitive version
    echo str_ireplace('world', 'PHP', 'Hello World'); // Hello PHP

    // Counting replacements
    str_replace('o', '0', 'Hello World', $count);
    echo $count; // 2

?>
```

Related : [strtr()](strtr()), [String](String), [strpos](strpos), [Case Sensitivity](Case Sensitivity)
