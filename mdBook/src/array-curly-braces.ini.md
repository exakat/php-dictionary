# Array With Curly Braces
Curly braces used to be a feature, used to access specific index in an array or in a string. They acted like the square braces. 

This features was deprecated in version 8.0.
```php
<?php

    $array = ['a', 'b', 'c', 'd'];
    echo $array{2};    // c
    
    $string = 'abcd';
    echo $string{2};   // c

?>
```

## See Also

+ [PHP RFC: Deprecate curly brace syntax for accessing array elements and string offsets](https://wiki.php.net/rfc/deprecate_curly_braces_array_access)

Related : [Array, []](Array, []), [Bracket](Bracket)
