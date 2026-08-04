# Null
``null`` is a special data type that represents a variable with no value or an undefined value. It is used to indicate the absence of a value. In other words, when a variable is assigned the value null, it means that the variable exists but has no valid data. 

``null`` may be used as a default value for variables, parameter or properties that are expected to hold some value later but don't have a value assigned initially. It was also be used to unset a variable and free up memory, when using the operator ``(unset)``. 

There is also a design pattern called Null Pattern, although its main goal is to remove usage of null and replace it with an actual object.
```php
<?php

    $a = null;
    $B = NULL;
    $c = \null;

    // same as  null|string $s 
    function foo(?string $s = null) {}

?>
```

## See Also

+ [Much ado about null](https://peakd.com/hive-168588/@crell/much-ado-about-null)
+ [Null Hell and How to Get Out of It](https://afilina.com/null-hell)
+ [Avoiding Unnecessary Null Checks](https://www.arhohuttunen.com/avoiding-unnecessary-null-checks/)

Related : [Nullable](Nullable), [Null Pattern](Null Pattern), [Authentication](Authentication), [Empty](Empty), [Overflow](Overflow), [Underflow](Underflow), [Void](Void), [Default Value](Default Value), [json_decode()](json_decode()), [Return Value](Return Value), [Value](Value), [Autovivification](Autovivification), [PHP Natives](PHP Natives), [Null Byte](Null Byte), [str_contains()](str_contains()), [Existence](Existence), [Standalone Types](Standalone Types)
