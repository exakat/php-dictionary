# Iterable
Iterable is a pseudo-type, which accepts any array or object implementing the ``Traversable`` interface. This is equivalent to the type ``array|Traversable``, as one keyword.
```php
<?php

function foo(iterable $iterable) {
    foreach ($iterable as $value) {
        // ...
    } 
}

?>
```

## See Also

+ [Master PHP Iterables: Arrays, Objects, Traversable Interface](https://flatcoding.com/tutorials/php/the-essential-guide-for-php-iterable/)
+ [PHP Iterators for walking through data structures – FastTips](https://inspector.dev/php-iterators-for-walking-through-data-structures-fasttips/)

Related : [Traversable](Traversable), [Array, []](Array, []), [Pseudo-type](Pseudo-type), [count()](count()), [PHP Natives](PHP Natives), [Pseudo-type](Pseudo-type), [Special Types](Special Types), [ArrayAccess](ArrayAccess)
