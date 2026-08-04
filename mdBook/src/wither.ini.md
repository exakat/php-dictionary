# Class Wither Method
``with`` is a prefix, that tells the reader that the method returns a copy of the object, and not the object itself. The ``with`` prefix may be added to any property name, virtual or concrete.
```php
<?php

class x {
    private A $property;
    
    // getter
    public function getProperty() : A {
        return $this->property;
    }

    // wither
    public function withProperty() : A{
        return clone $this->property;
    }
}

?>
```

## See Also

+ [RFC: Accessors](https://wiki.php.net/rfc/property_accessors)

Related : [Class](Class), [Class Setter Method](Class Setter Method), [Class Getter Method](Class Getter Method), [Immutable](Immutable)
