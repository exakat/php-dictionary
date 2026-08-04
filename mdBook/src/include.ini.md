# include
Inclusion, often represented by the ``include`` keyword, is the process to read an external file, and evaluate with the current application for execution. It may define new structures, and execute code. 

Inclusion relies on four language structures: include, require, include_once, require_once. 

Inclusion is often hidden in ``autoload()`` functions: the code is included class per class, upon request.
```php
vars.php
<?php

$color = 'green';
$fruit = 'apple';

?>

test.php
<?php

echo "A $color $fruit"; // A

include 'vars.php';

echo "A $color $fruit"; // A green apple

?>
```

## See Also

+ [How to Use PHP Include and Require Statements](https://www.scoutapm.com/blog/how-to-use-php-include-and-require-statements/)

Related : [Inclusions](Inclusions), [Class Autoloading](Class Autoloading), [File](File), [Namespaces](Namespaces), [Local File Inclusion](Local File Inclusion), [Const](Const), [Order Of Execution](Order Of Execution)
