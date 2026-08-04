# Array Element
An array element is a piece of data, stored at an index in the array. 

An array element may of any type, and it may be also repeated, unlike the array index.

The array element is also called an item. It is often named ``$value``, in a loop, as a blind variable.

When an array is a list, the elements are all of the same type. When an array is a hash, 

Array elements are not typed at the language level. They may be typed for static analysis tools, via the phpdoc syntax.
```php
<?php

$array = ['a' => 1, 'b' => 3, 'c' => 5];
while(list($key, $value) = each($array)) {
    print $key . ' => ' . $value . PHP_EOL;
}

?>
```

Related : [Index For Arrays](Index For Arrays), [each](each), [Loops](Loops), [Blind Variable](Blind Variable), [Hash](Hash), [Multidimensional Array](Multidimensional Array), [Readable](Readable), [Writable](Writable), [Writeable](Writeable)
