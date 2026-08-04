# Pointer
Pointers are a fundamental concept in programming, especially in languages like C and C++. A pointer is a variable that stores the memory address of another variable.

PHP does not support a notion of pointer. The closest feature is called 'reference', yet it is quite different from pointers.
```php
<?php

$a = 1;
$b = &$a;
$b = 2;

echo $a; // 2 

?>
```

Related : [References](References)
