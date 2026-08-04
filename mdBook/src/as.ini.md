# As
The as operator has several usage:

+ It is an optional keyword with the ``foreach()`` control structure, to access the key of the looped array
+ It is an optional keyword with the use expression, in trait import
+ It is an optional keyword with the use expression, in namespace import

The ``as`` operator often works to give a distinct name to an existing structure.
```php
<?php

    use stdClass as StandardClass;

    foreach($map as $key => $value) {
        print "$key => $value\n";
    }

?>
```

## See Also

+ [PHP as Keyword](https://zetcode.com/php/as-keyword/)

Related : [foreach()](foreach()), [Use Alias](Use Alias), [Alias](Alias)
