# Case
``case`` is a PHP keyword, which may be used in three distinct situations: 

+ With ``switch()`` expression
+ With ``match()`` expression
+ With enumeration

``case`` is often complemented with ``default``.
```php
<?php

enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}

?>
```

Related : [Default](Default), [Match](Match), [Enumeration (enum)](Enumeration (enum)), [Enumeration Case](Enumeration Case), [Switch](Switch), [Switch Case](Switch Case)
