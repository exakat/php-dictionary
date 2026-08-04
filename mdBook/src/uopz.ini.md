# User Operations For Zend (UOPZ)
The ``UOPZ`` extension, User Operations for Zend, exposes Zend Engine functionality normally used at compilation and execution time in order to allow modification of the internal structures that represent PHP code, and for user code to interact with the VM.
```php
<?php

    // Dynamically adds an interface to a class with UOPZ
    
    interface myInterface {}
    
    class myClass {}
    
    uopz_implement(myClass::class, myInterface::class);
    
    var_dump(class_implements(myClass::class));

?>
```

## See Also

+ [UOPZ repository](https://github.com/krakjoe/uopz)

Related : [Internals](Internals), [PHP Engine](PHP Engine)
