# Native
A feature is called native or built-in when it is part of the standard installation of PHP. For example, ``.``, dot operator for concatenation, or the ``stdClass`` class are native to PHP.

On the other hand, a feature is custom: that is, when defined by the developer or a PHP extension.
```php
<?php

    // This is a native function
    $s = strtolower($s);
    
    // This is not a native function : it comes from an extension
    $rar_arch = RarArchive::open('latest_winrar.rar');

?>
```

## See Also

+ [The 100 PHP functions in 2022](https://www.exakat.io/en/the-100-php-functions-in-2022/)

Related : [Userland](Userland), [Dynamic Loading](Dynamic Loading), [Foreign Function Interface (FFI)](Foreign Function Interface (FFI)), [PHP Constants](PHP Constants), [PHP Variables](PHP Variables)
