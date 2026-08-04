# __TRAIT__
``__TRAIT__`` holds the current trait name: this is the trait of definition, not the called class. It is not the same as ``self::class``, which may change depending on the calling context.

The trait name includes the namespace it was declared in, e.g. ``N\X``. It does not include the leading ``\``. 

When used outside a trait, ``__TRAIT__`` is empty. 

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combination of uppercase and lower case. 
```php
<?php

namespace N; 

trait T {
    function foo() {
        echo __TRAIT__;  // N\T
        echo __CLASS__;  // N\X 
    }
}

class X {
    use T;
}

?>
```

Related : [__FUNCTION__](__FUNCTION__), [__METHOD__](__METHOD__), [__CLASS__](__CLASS__)
