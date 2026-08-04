# Stubs Files
Stubs files are PHP code, that contains only the definitions of classic PHP structures: functions, constants, classes, interfaces, without any actual code. They provide the definitions and signatures, in particular for type analysis or static code analysis reviews.

Stubs files are also used for PHP code templates: they are mostly made of PHP code, with placeholders, for later generations.
```php
<?php

    $a = 0; // $a is getting overwritten
    $array = extract(['a' => 1, 'b' => 2]);

    echo $a + $b; // 2

?>
```

## See Also

+ [Stub Files - PHPStan User Guide](https://phpstan.org/user-guide/stub-files)

Related : [compact()](compact())
