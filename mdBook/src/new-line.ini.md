# New Line
A new-line ``\n`` character. It may be represented by this string sequence, or an actual new line, within a string, or, also by the ``PHP_EOL`` native constant. 

PHP uses the ``\r\f`` representation for a new line: it is a combinaison of line feed and return carriage. This is the Linux standard. The ``PHP_EOL`` constant depends on the running platform: its value is adapted to the underlying OS.

By convention, PHP files are expected to end on a new line.

It was possible to use new lines within a namespace name, until PHP 8.0. This is not possible anymore.
```php
<?php

    $string = "one new line
another new line\nAnd then another new line" . PHP_EOL

?>
```

## See Also

+ [Newline (\n) in PHP](https://ssojet.com/special-characters/newline-n-in-php)

Related : [Line Feed](Line Feed), [Return Carriage](Return Carriage), [PHP Constants](PHP Constants), [Carriage Return](Carriage Return)
