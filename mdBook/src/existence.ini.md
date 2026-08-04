# Existence
Existence is the general concept of checking whether something is available before using it. PHP provides several dedicated functions and constructs for this, each targeting a different kind of entity.

``isset()`` checks whether a variable exists and is not ``null``. It is a language construct, not a function, so it does not trigger an error on undefined variables. It is commonly used to guard access to array keys or object properties before reading them.

``defined()`` checks whether a constant has been defined, either with ``define()`` or ``const``. It is the counterpart of ``isset()`` for constants, since constants are not variables and ``isset()`` cannot be used on them.

``file_exists()`` checks whether a file or directory exists on the filesystem at a given path. It is used before reading, including, or operating on a file, to avoid errors on missing paths.

``class_exists()``, ``interface_exists()``, and ``trait_exists()`` check whether a class, interface, or trait has been loaded or can be autoloaded. They are useful in conditional compatibility code, plugin systems, or when working with optional dependencies.

The underlying concept is the same across all these cases: verify that an entity is available in its respective scope before attempting to use it. Failing to check existence is a common source of warnings, errors, and undefined-behavior bugs.
```php
<?php

    // Variable existence
    if (isset($config['timeout'])) {
        $timeout = $config['timeout'];
    }

    // Constant existence
    if (defined('APP_ENV')) {
        echo APP_ENV;
    }

    // File existence
    if (file_exists('/path/to/config.php')) {
        include '/path/to/config.php';
    }

    // Class existence
    if (class_exists(SomeOptionalLibrary::class)) {
        $obj = new SomeOptionalLibrary();
    }

?>
```

## See Also

+ [defined](https://www.php.net/manual/en/function.defined.php)
+ [file_exists](https://www.php.net/manual/en/function.file-exists.php)
+ [class_exists](https://www.php.net/manual/en/function.class-exists.php)

Related : [Isset](Isset), [defined()](defined()), [Undefined](Undefined), [Null](Null), [File](File), [Class Autoloading](Class Autoloading), [Class](Class), [Uninitialized](Uninitialized)
