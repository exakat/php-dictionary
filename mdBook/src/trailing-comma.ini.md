# Trailing Comma
The trailing comma is the possibility to leave the last element of a list empty. This is for presentation reasons. In particular, VCS will be able to treat the last line just like any another previous line, with a final comma. This reduces de amount of diff.

Trailing commas were introduced progressively. In version 7.2, in use statements; in version 7.3, in method calls; in version 8.0, in method declarations; in older versions, in array declarations.

```php
<?php

    $a = [1,
          2,
          3,
          // Adding a new element in this array only creates
          // a one line diff, when using the trailing comma
         ];

?>
```

## See Also

+ [How I learned to stop worrying and love the trailing comma](https://c-harrison.medium.com/how-i-learned-to-stop-worrying-and-love-the-trailing-comma-480f3a73d203)

Related : [Comma](Comma), [Convention](Convention)
