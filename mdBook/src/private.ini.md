# Private Visibility
The private keyword is part of the three keywords to define visibility of a method, property or class constant. It is the strictest level of visibility: it restricts usage to the current class only. A child class can redefine it, but it cannot the parent's: the reverse is also true.

The private keyword cannot be used with the ``final`` keyword: a private method is not visible in the child classes, and can't also be overriden.

The private keyword cannot be used with the ``abstract`` keyword: a private method is not visible in the child classes, and can't also be overriden.

```php
<?php

    class X {
        private const X = 1;
        
        final public function method() { 
            echo self::X;
        }
    }

?>
```

Related : [Final Keyword](Final Keyword), [Visibility](Visibility), [Protected Visibility](Protected Visibility), [Public Visibility](Public Visibility), [Var](Var), [Overwrite](Overwrite), [Abstract Keyword](Abstract Keyword), [Data Hiding](Data Hiding), [Modifier](Modifier), [Package-Level](Package-Level)
