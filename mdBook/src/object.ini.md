# Object
PHP includes a complete object model. Some of its features are: visibility, abstract and final classes and methods, additional magic methods, interfaces, and cloning.

``object`` is also a PHP type, which represent an object of any class.
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

Related : [Visibility](Visibility), [Abstract Keyword](Abstract Keyword), [Final Keyword](Final Keyword), [Magic Methods](Magic Methods), [Interface](Interface), [Clone](Clone), [Type System](Type System), [Dereferencing](Dereferencing), [PHP Natives](PHP Natives), [Pseudo-type](Pseudo-type), [Special Types](Special Types), [Handle](Handle), [Identity](Identity), [instance](instance), [instanceof](instanceof), [is_a()](is_a()), [SplObjectStorage](SplObjectStorage), [SplStorageObjects](SplStorageObjects), [State](State)
