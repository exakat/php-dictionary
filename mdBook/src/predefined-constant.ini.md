# Predefined Constants
Predefined constants are PHP native constants, available at the start of the PHP engine. 

Those constants are for internal usage, such as E_ALL, for error reporting, or STDOUT, for output. Some constants are providing information, such as PHP_VERSION's PHP version number. Others are meant to give a readable name to common values or arguments, such as DATE_RFC822. 

Other constants come from extensions: for example, the Math extension defines M_PI for the pi constant, 3.14159..., libsodium defines SODIUM_CRYPTO_CORE_RISTRETTO255_SCALARBYTES, etc. Those are also predefined constants, although they depend on the compilation of PHP.

The list of all the defined constants is available with the ``get_defined_constants()`` function.
```php
<?php

    echo 'This is PHP ' . PHP_VERSION;

?>
```

## See Also

+ [Understanding PHP Predefined Constants](https://dev.to/patricia1988hernandez2/understanding-php-predefined-constants-6db)

Related : [Constants](Constants), [PHP Constants](PHP Constants)
