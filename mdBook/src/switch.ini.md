# Switch
The ``switch`` expression branches evaluation based on an equality check of a value. It also handles a ``default`` case, when none of the explicit cases match.

Each case is an expression, and shall be used that way. 

``switch`` use a relaxed comparison between the parameter value and the case values. This means that some type juggling happens, and some literals might behave as identical.
```php
<?php

$b = 1;
switch ($i) {
    case 0:
        echo 'i equals 0';
        break;
    case 1:
        echo 'i equals 1';
        break;
    case $b + 1:
        echo 'i equals '.($b + 1);
        break;
    default:
        echo 'i is none of the expected values.';
}

switch (false) {
    case null:
        // false == null so this is the case
        echo 'This is null';
        break;
    case '':
        echo 'This is empty string';
        break;
    default:
        echo 'This is none of the expected values.';
}

?>
```

## See Also

+ [Compact switch alternative](https://tomlankhorst.nl/compact-switch-alternative-php/)
+ [PHP switch best practices](https://www.exakat.io/well-structured-switch-command-in-php/)

Related : [Match](Match), [Default](Default), [Strict Comparison](Strict Comparison), [Simple Switch](Simple Switch), [If Then Else](If Then Else), [Break](Break), [Case](Case), [Comparison](Comparison), [Conditional Structures](Conditional Structures), [Control Flow](Control Flow), [Relaxed Comparison](Relaxed Comparison), [Semicolon ;](Semicolon ;), [Switch Case](Switch Case), [Switch Default](Switch Default), [Feature Flag](Feature Flag)
