# Typed Property
A typed property has a type in its definition. 

Typed property may have a default value, although it must be compatible with the specified type. Typed properties cannot have a default values when they are typed with an object type.

The type applies all the time: unlike the parameter's type, any usage of the property must be compatible with the type.

Typed properties may be static or not.

Typed properties are a base for ``readonly`` and asymmetric visibility.
```php
<?php

class X {
    private int $i = 1;
    
    private readonly float $y;
    
    public static string $s;
}

?>
```

Related : [Properties](Properties), [Type System](Type System)
