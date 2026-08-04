# __debugInfo() Method
``__debugInfo()`` is a magic method: it is called by ``var_dump()`` to customize the information displayed for an object.

By default, ``var_dump()`` shows every property of an object, including private and protected ones. When ``__debugInfo()`` is defined, its return value is shown instead, allowing sensitive properties to be hidden, computed values to be added, or the output to be simplified.

``__debugInfo()`` must return an array. The keys become the displayed property names, and are not required to match actual property names.

``__debugInfo()`` was introduced in version 5.6. Before that version, ``var_dump()`` always displays the object's actual properties, and the method, if present, is simply ignored.
```php
<?php

    class X {
        private $public = 'a';
        private $secret = 'password';

        function __debugInfo() {
            return ['public' => $this->public,
                    'secret' => '***redacted***'];
        }
    }

    var_dump(new X);

?>
```

## See Also

+ [__debugInfo()](https://riptutorial.com/php/example/4605/--debuginfo--)

Related : [Magic Methods](Magic Methods), [var_dump()](var_dump()), [__toString() Method](__toString() Method), [__sleep() Method](__sleep() Method), [__wakeup() Method](__wakeup() Method), [print_r()](print_r()), [var_export()](var_export())
