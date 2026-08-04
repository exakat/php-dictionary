# strtoupper()
``strtoupper()`` converts all ASCII alphabetic characters in a string to uppercase.

It only handles the 26 ASCII letters, from ``a`` to ``z``. Characters outside the ASCII range are not converted. For Unicode-aware uppercasing, use ``mb_strtoupper()``, which respects the string encoding.

``strtoupper()`` is used for display normalisation, case-insensitive comparisons, and formatting constants or labels.
```php
<?php

    echo strtoupper('hello world');  // HELLO WORLD
    echo strtoupper('php 8.4');      // PHP 8.4

    // Unicode-aware version
    echo mb_strtoupper('héllo', 'UTF-8'); // HÉLLO

?>
```

## See Also

+ [PHP strtoupper() and strtolower() Functions: A Complete Guide](https://reintech.io/blog/php-strtoupper-strtolower-functions-complete-guide)

Related : [strtolower()](strtolower()), [String](String), [Case Sensitivity](Case Sensitivity), [Multibyte String](Multibyte String), [setlocale](setlocale)
