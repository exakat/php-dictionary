# define()
``define()`` is a PHP function, that introduces global constant definitions. 

``define()`` is a function, and may be called anywhere. It is slower than ``const``, as it is only executed at runtime. ``define()`` doesn't allow class constants creation.

``define()`` used to create case-insensitive constant, and this was abandoned in version 7.3.

``define()`` cannot create class constants.

```php
<?php
    define('HELLO', 'Hello');
    
    print HELLO . " world\n";
?>
```

## See Also

+ [Problem: Define() vs Const in PHP](https://www.uptimia.com/questions/what-are-the-differences-between-define-and-const-in-php)

Related : [Const](Const), [Constants](Constants), [Static Constant](Static Constant), [defined()](defined()), [Conditioned Structures](Conditioned Structures), [Execution Time](Execution Time)
