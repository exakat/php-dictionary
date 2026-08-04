# Properties
Class properties are variables, local to an object or a class.

Class properties might have visibility, chosen among: public, protected and private. public is the default.

Class properties might have an asymmetric visiblity for writing, chosen among: ``public(set)``, ``protected(set)`` and ``private(set)``. By default, it is the same as the read visibility.

Class properties might have a default value. By default it is ``null``.

Class properties might have a type, since PHP 7.4

Class properties might be readonly, for properties which are only set once, and cannot be modified. 

Class properties might be static, and not related to an object, but to a class. 

A property must be uniquely defined in a class. Class properties may be redefined in children or parent when the visibility allows it.

Properties are also called members.
```php
<?php

    class X {
        private $property = 1;
    }

?>
```

## See Also

+ [Class properties](https://www.php-cpp.com/documentation/properties)

Related : [Visibility](Visibility), [static](static), [Readonly](Readonly), [Attribute](Attribute), [Default Value](Default Value), [Magic Property](Magic Property), [Dynamic Properties](Dynamic Properties), [Property Hook](Property Hook), [Asymmetric Visibility](Asymmetric Visibility), [Type System](Type System), [Asymmetric Visibility](Asymmetric Visibility), [Data Container](Data Container), [Static Property](Static Property), [stdclass](stdclass), [Typed Property](Typed Property), [Method](Method), [Readable](Readable), [Virtual Property](Virtual Property), [Writable](Writable), [get_object_vars()](get_object_vars()), [Promoted Properties](Promoted Properties), [Property Type Declaration](Property Type Declaration), [Var](Var), [Writeable](Writeable), [Non-static](Non-static), [State](State), [Computed Property](Computed Property), [Data Hiding](Data Hiding), [Modifier](Modifier), [Mutable State](Mutable State)
