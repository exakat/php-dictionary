# Square Brackets
Square brackets ``[`` and ``]`` are used with the array syntax: they delimit the offset in the index.

Square brackets are also used to define array: this is the short syntax array, where ``[1,2,3]`` is equivalent to ``array(1,2,3)``.

Square brackets are also used to embody the ``list()`` command: this is the short syntax array, where ``[$a, $b, $c]`` is equivalent to ``list($a,$b,$c)``. The ``list()`` and ``array()`` syntaxes are distinguished between one another as ``list()`` must be in a writing context, such as the left side of an assignation or the values of a foreach, while the ``array()`` must be in a reading context, such as the right side of an assignation, or parameter passing.

Finally, an empty square bracket is the append operator.
```php
<?php

//Definition of arrays
$array = [1, 2, 3];

// Accessing element in the array
print $array[2]; // 3 

// equivalent to list
[$a, $b] = $array; 

$array[] = 4;
// $array == [1, 2, 3, 4];

?>
```

Related : [Array, []](Array, []), [Index For Arrays](Index For Arrays), [List](List), [Array Append](Array Append), [Curly Brackets](Curly Brackets), [Parenthesis](Parenthesis), [Bracketless](Bracketless), [fnmatch()](fnmatch())
