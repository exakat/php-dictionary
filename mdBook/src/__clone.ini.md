# __clone() Method
To clone an object is the creation of a new distinct object, from an existing one. This is basically a copy, although the object itself is multiplied by calling the clone operator.

By default PHP does a shallow clone, duplicating the scalars, like string, integer..., and keeping the same reference to objects. To make a deep clone, the class must define the ``__clone`` magic method.

Cloning is similar to creating another object of the same class, without requiring all the constructor arguments.

```php
<?php

    $spike = new Dog('Spike', 'Teckel', 'red');
    $medor = clone $spike;
    
    $medor->setCollar('green'); // distinguish spike and medor by collar

?>
```

## See Also

+ [How to clone an object in PHP](https://linuxhint.com/cloning_objects_php/)

Related : [Readonly](Readonly), [Magic Methods](Magic Methods), [Deep Clone](Deep Clone), [Shallow Clone](Shallow Clone)
