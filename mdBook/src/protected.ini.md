# Protected Visibility
The ``protected`` keyword is part of the three keywords to define visibility of a method, property or constant. It is the middle level of visibility: it restricts usage to the current class, its parents and children.
```php
<?php

class W {
    public function methodY() { 
        // dependency on the child class
        echo self::X;
    }
}

class X extends W {
    protected const X = 1;
    
    public function method() { 
        echo self::X;
    }
}

class Y extends X {
    public function methodY() { 
        echo self::X;
    }
}

?>
```

Related : [Final Keyword](Final Keyword), [Visibility](Visibility), [Private Visibility](Private Visibility), [Public Visibility](Public Visibility), [Var](Var)
