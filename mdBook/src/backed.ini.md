# Backed
A backed structure has several meanings: 

+ Backed enumeration: an enumeration that has an integer or string value
+ Backed property: a property with a hook, that actually stores the value in the property.
```php
<?php

    enum E : int {
        case A = 1;
    }
    
    class X {
        private $p { get => $this->p;}
    }
    
?>
```

Related : [Backed Enum](Backed Enum), [Backed Property](Backed Property)
