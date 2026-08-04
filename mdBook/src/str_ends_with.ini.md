# str_ends_with()
``str_ends_with()`` is a built-in PHP function that checks that the string ends with the specified suffix.

``str_ends_with()`` is a case-sensitive. Use ``strtolower()`` to remove case, and make case-insensitive comparisons. It has an complementary function called ``str_starts_with()``.

```php
<?php

    var_dump(str_starts_with('abc', 'a')); // false
    var_dump(str_starts_with('abc', 'b')); // false
    var_dump(str_starts_with('abc', 'c')); // true

?>
```

Related : [str_starts_with()](str_starts_with()), [strpos](strpos)
