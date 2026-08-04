# Import
Imports are elements of a different namespaces, brought into the current one. They rely on the ``use`` expression, usually at the beginning of the file.

Once a class, interface, trait, enum, function or constant has been imported, it is available in the current namespace. It may also use another name, also called alias.

Import is sometimes mistaken with inclusion, which bring in code.
```php
<?php

    namespace A;
    
    // import classes
    use B\C; 
    use D\E as F; 
    // import function
    use function A\foo; 
    // import constants
    use const A\D;
    
    // call an imported function with an imported constant
    foo(D); 

?>
```

## See Also

+ [Avoiding Imports and Aliases in PHP](https://localheinz.com/articles/2020/05/19/avoiding-imports-and-aliases-in-php/)
+ [6 good practices for ‘use’ in PHP](https://www.exakat.io/6-good-practices-for-use/)

Related : [Relative Name](Relative Name), [Absolute Name](Absolute Name), [Global Space](Global Space), [Namespaced Name](Namespaced Name)
