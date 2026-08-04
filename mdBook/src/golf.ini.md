# Golf
Code golf is about creating the shortest code, in bytes, to solve a given problem, in a specific language or free of choice. Solutions are scored purely on character count; readability, style, and maintainability are deliberately ignored.

PHP golfers exploit language-specific shortcuts to shave bytes: the short echo tag ``<?=``, omitting the closing ``?>`` tag, the null coalescing and null coalescing assignment operators, ``??`` and ``??=``, instead of ``isset()`` checks, the ternary shorthand ``?:``, ``list()``/``[]`` destructuring instead of separate assignments, loose ``==`` comparisons, and string-to-number juggling such as writing ``"1e9"`` instead of ``1000000000``.

Community sites such as Code Golf Stack Exchange and Anarchy Golf host PHP-specific challenges, and submissions are usually scored with ``strlen()`` run on the minified source.
```php
<?php

    // All spaces are removed to make the code compact
    $billionPlusOne=1+1e9; 

    // 1e9 is cast automatically to 1000000000 or 1_000_000_000, but takes less space to write

?>
```

## See Also

+ [Tips and Tricks when Golfing in PHP](https://dsolstad.com/phpgolf/2018/05/01/phpGolf-tips-and-tricks.html)

Related : [Cast Operator](Cast Operator), [One Liner](One Liner)
