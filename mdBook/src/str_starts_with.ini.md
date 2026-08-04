# str_starts_with()
``str_starts_with()`` is a built-in PHP function that checks that the string starts with the specified prefix.

``str_starts_with()`` is a case-sensitive. Use ``strtolower()`` to remove case, and make case-insensitive comparisons. It has an complementary function called ``str_ends_with()``.

```php
<?php

    var_dump(str_starts_with('abc', 'a')); // true
    var_dump(str_starts_with('abc', 'b')); // false
    var_dump(str_starts_with('abc', 'ab')); // true
    var_dump(str_starts_with('abc', 'abc')); // true
    var_dump(str_starts_with('abc', 'abcd')); // false

?>
```

Related : [str_ends_with()](str_ends_with()), [strpos](strpos)
