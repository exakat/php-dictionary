# strtolower()
``strtolower()`` converts all ASCII alphabetic characters in a string to lowercase.

It only handles the 26 ASCII letters, from ``A`` to ``Z``. Characters outside the ASCII range, such as accented letters or characters from non-Latin scripts, are not converted. For Unicode-aware lowercasing, use ``mb_strtolower()``, which respects the encoding of the string.

``strtolower()`` is commonly used when comparing strings in a case-insensitive manner, building slugs, or normalising input.
```php
<?php

    echo strtolower('Hello World');  // hello world
    echo strtolower('PHP 8.4');      // php 8.4

    // Unicode-aware version
    echo mb_strtolower('Héllo', 'UTF-8'); // héllo

?>
```

## See Also

+ [PHP strtoupper() and strtolower() Functions: A Complete Guide](https://reintech.io/blog/php-strtoupper-strtolower-functions-complete-guide)

Related : [strtoupper()](strtoupper()), [String](String), [Case Sensitivity](Case Sensitivity), [Slug](Slug), [Multibyte String](Multibyte String), [Idempotent](Idempotent), [setlocale](setlocale)
