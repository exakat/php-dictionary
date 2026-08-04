# Constants
Constants are named values, that never change. 

Constants may be created with the const keyword or the ``define()`` function. They may be tested for existence with the ``defined()`` function.

There are global constants, which are accessible with their name and their namespaces. There are also constants in classes, interfaces, enums and traits. Those are called class constant.

Constants are namespace dependent. They can be imported using the ``use const`` command. 

Constants are usually written in uppercase. 

Global constants used to be case insensitive, when created with ``define()``. This feature was removed in version 8.0. Nowadays, both ``const`` and ``define`` create case insensitive values.
```php
<?php

const A = 1;
define('B', 2);

// displays 1
echo A;

?>
```

## See Also

+ [Understanding PHP Constants: A Simple Guide with Examples](https://flatcoding.com/tutorials/php/understanding-the-php-constant-expression/)

Related : [Static Constant](Static Constant), [Centralization](Centralization), [Constant Scalar Expression](Constant Scalar Expression), [Dynamic Constant](Dynamic Constant), [New In Initializers](New In Initializers), [Predefined Constants](Predefined Constants), [Class Constant Syntax](Class Constant Syntax), [Constant Case](Constant Case), [define()](define()), [Literal](Literal), [Anonymous Constant](Anonymous Constant), [DIRECTORY_SEPARATOR](DIRECTORY_SEPARATOR), [Dynamic Class Constant](Dynamic Class Constant), [Hard Coded](Hard Coded), [Magic Numbers](Magic Numbers), [Order Of Execution](Order Of Execution)
