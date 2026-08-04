# String Increment
String increment is the PHP feature that applies the ``++`` pre- and post-increment operators on non-numeric strings. 

These strings last character's ASCII code is incremented by one, with possible extension of the string when the letters reach ``z`` and ``Z``. 

This feature, when based on ``++`` is deprecated, and shall be removed in version 9. It has been replaced by the ``str_increment()`` function, which has the same feature, though not implicit in the engine anymore. It is also extended with It has been replaced by the ``str_decrement()``.

A deprecation message is active since PHP 8.3.
```php
<?php

    $s = 'y';
    echo ++$s; // z
    echo ++$s; // aa 
    echo ++$s; // ab
    
    $s = 'Y';
    echo ++$s; // Z
    echo ++$s; // AA
    echo ++$s; // AA

?>
```

## See Also

+ [str_decrement](https://www.php.net/manual/en/function.str-decrement.php)
+ [str_increment](https://www.php.net/manual/en/function.str-increment.php)

Related : [Increment](Increment), [String](String), [American Standard Code for Information Interchange (ASCII)](American Standard Code for Information Interchange (ASCII)), [Type Juggling](Type Juggling), [Deprecation](Deprecation)
