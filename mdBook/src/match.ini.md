# Match
The ``match`` expression is the remote cousin of the ``switch``. It takes a value, branch among a list of cases, or fallback to a default one, and returns a unique value. 

``match`` use a strict comparison for the comparison. ``match`` raise an error if no case match, unless the ``default`` case is provided. 

``match`` is an expression, to be used in an assignment, while ``switch`` is a command, and must be used alone.
```php
<?php

$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar'   => 'This food is a bar',
    'cake'  => 'This food is a cake',
    default => 'This is not food'
};

?>
```

## See Also

+ [PHP Tricks: Multi-value match()](https://peakd.com/hive-168588/@crell/php-tricks-multi-value-match)

Related : [Switch](Switch), [Default](Default), [If Then Else](If Then Else), [UnhandledMatchError](UnhandledMatchError), [Case](Case), [Comparison](Comparison), [Conditional Structures](Conditional Structures), [Control Flow](Control Flow), [Switch Fallthrough](Switch Fallthrough), [Simple Switch](Simple Switch), [Strict Comparison](Strict Comparison), [Switch Case](Switch Case), [Switch Default](Switch Default), [Arm](Arm), [Control Structures](Control Structures), [Identical Operator](Identical Operator), [Streamlining](Streamlining)
