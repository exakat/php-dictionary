# Never Type
``never`` is a special return type that signals a method that never returns: it only dies, throws an exception or runs an infinite loop.

``never`` is the lowest type available. Nothing can be a sub-type of ``never`` but never can be the subtype of anything.
```php
<?php

function headers() : never {
    headers('Location: https://www.exakat.io/');
    die();
}

?>
```

## See Also

+ [The never Return Type for PHP](https://betterprogramming.pub/the-never-return-type-for-php-802fbe2fa303)
+ [Using ‘never’ return type in PHP (PHP 8.1+)](https://www.slingacademy.com/article/using-never-return-type-in-php-php-81/)

Related : [Type System](Type System), [PHP Natives](PHP Natives), [Return Value](Return Value), [Special Types](Special Types)
