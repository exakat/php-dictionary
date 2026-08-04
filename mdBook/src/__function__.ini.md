# __FUNCTION__
``__FUNCTION__`` holds the current function or method name.

The function name includes the namespace it was declared in, e.g. ``N\X\foo``. It also uses the definition's case.

When used inside a method, ``__FUNCTION__`` is the name of the method it is used in. When used outside a function, this constant holds an empty string, and does not emit any warning.

``__METHOD__`` and ``__FUNCTION__`` are almost identical.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combination of uppercase and lower case. 
```php
<?php

    function foo() {
        echo __FUNCTION__; // foo
    }
    
    function GOO() {
        echo __function__; // GOO
    }
    
    class X {
        function foo() {
            echo __FUNCTION__; // foo
        }
    }
    
    foo();
    (new X)->foo();

?>
```

Related : [Magic Constants](Magic Constants), [__METHOD__](__METHOD__), [__CLASS__](__CLASS__), [__TRAIT__](__TRAIT__)
