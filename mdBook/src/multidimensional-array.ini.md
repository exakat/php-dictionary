# Multidimensional Array
An array inside an array is called a multidimensional array. Dimensions may be created as many as necessary, by using the square brackets.

PHP creates the arrays on the fly. When the intermediate array are undefined, PHP will add them in the structure.
```php
<?php

$a = array(1 => array('a' => 1));

$a[1]["b"]['c'] = 3;

print_r($a);

/*
Array
(
    [1] => Array
        (
            [a] => 1
            [b] => Array
                (
                    [c] => 3
                )

        )

)
*/
?>
```

Related : [Array, []](Array, []), [Array Element](Array Element), [Index For Arrays](Index For Arrays), [JavaScript Object Notation (JSON)](JavaScript Object Notation (JSON)), [array_keys()](array_keys()), [count()](count()), [Dot Notation](Dot Notation)
