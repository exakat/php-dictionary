# Overwrite
Overwriting is the process to replace an existing structure, with another one, entirely different. The replaced structure may be a method, a property, class constant, a variable. The first ones are related to OOP programming and inheritance, the latter is variable behavior.

Overwriting is applicable to constants, methods and properties. Methods still should have a compatible signature with their parent's equivalent, while properties and constants may change their default value.

Overwriting methods is prevented by the ``final`` keyword, or the ``private`` visibility.

Overwriting is also called overloading.
```php
<?php

class x {
    const Y = 1;
    const Z = 2;
}

class xx extends x {
    // Z is inherited, and its value is 2    
    // Y used to be 1, it is now 31
    const Y = 31;
    const A = 3;
}

$a = 1; 
$a = 2; // The first value of $a is overwritten

// a silent overwrite
$a = function() use ($a) {}; 

?>
```

Related : [Final Keyword](Final Keyword), [Private Visibility](Private Visibility), [Inheritance](Inheritance), [Override Attribute](Override Attribute), [Assignations](Assignations), [Child Class](Child Class), [Overriding](Overriding), [parent](parent)
