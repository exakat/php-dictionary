# Double Arrow
The double arrow is the PHP token ``=>``. It is an arrow, and the equal sign as body of the arrow gives it its name of double arrow.

The double arrow is used in several situations: 

+ With arrow functions: ``fn($a) => $a + 1;``
+ In arrays, to distinguish the key from the value: ``['a' => 3]``
+ In list, to distinguish the key from the value: ``['a' => $b] = ['a' => 4]``
+ In yield, to distinguish the key from the value: ``yield 'a' => $b;``
+ In property hooks, to start the body of the hook: ``private $p { get => $this->p; }``

``=>`` has no relationship with ``<=``, which is a comparison operator, nor with ``->``, which is the object operator.
```php
<?php

    $array = ['a' => 3, 3];

?>
```

## See Also

+ [List of Parser Tokens](https://www.php.net/manual/en/tokens.php)
+ [Understanding the Difference between -> and => in PHP and Laravel](https://medium.com/@tajbidtousif/understanding-the-difference-between-and-in-php-and-laravel-60f8a38fc5be)

Related : [Arrow Functions](Arrow Functions), [List](List), [Yield](Yield), [Property Hook](Property Hook), [Comparison](Comparison), [Object Operator ->](Object Operator ->)
