# Object Type
``object`` is a PHP type, which represents an object of any class, including anonymous classes. 

``object`` may be used with properties, arguments and returntype, but not with ``instanceof``.
```php
<?php

foreach([11,12,13] as $id => $value) {
    print "$id => $value\n";
}

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

$i = 10;
while ($i <= 10) {
    echo $i++;  
}

$i = 10;
do {
    echo $i++;  
} while ($i <= 10);

$a = new A;
var_dump($a instanceof object);

?>
```

## See Also

+ [TYPE HINT ALL THE THINGS!](https://thecodingmachine.io/type-hint-all-the-things)

Related : [Magic Methods](Magic Methods), [Clone](Clone), [Type System](Type System), [instanceof](instanceof)
