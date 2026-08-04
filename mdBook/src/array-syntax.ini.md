# Array Syntax
The array syntax is the usage of square brackets after a data container, such as variables or properties, or a literal, to access an element. It is generally known to be used with array structures, though it may also be used with strings and objects.
```php
<?php

    $array = ['a', 'b', 'c'];
    echo $array[1]; // b
    
    $string = 'ABC';
    echo $string[2]; // C
    
    $object = new ArrayObject(['x', 'y', 'z']);
    print $object[0]; // x

?>
```

Related : [Object Syntax](Object Syntax), [resource](resource), [ArrayObject](ArrayObject), [Array Dot Notation](Array Dot Notation)
