# __CLASS__
``__CLASS__`` holds the current class name: this is the class of definition, not the called class. It is not the same as ``self::class``, which may change depending on the calling context.

The class name includes the namespace it was declared in, such as  ``N\X``. It does not include the leading ``\``. 

When used inside a trait method or property default, ``__CLASS__`` is the name of the class the trait is used in. When used outside a function, this constant holds an empty string, and does not emit any warning.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combination of uppercase and lower case. 
```php
<?php

    namespace N; 
    
    class X {
        function foo() {
            echo __CLASS__;  // N\X
        }
    }

?>
```

Related : [__FUNCTION__](__FUNCTION__), [__METHOD__](__METHOD__), [__TRAIT__](__TRAIT__), [get_class()](get_class()), [Magic Constants](Magic Constants)
