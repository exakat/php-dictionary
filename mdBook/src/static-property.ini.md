# Static Property
Static properties are properties defined with the ``static`` keyword. They may be accessed with the name of the class, or instantiated object. 

Static properties are also called 'class properties' as they are common to all objects of the same class: there is no need to instantiate an object to access them, when they are public.
```php
<?php

class x {
    static $p = 1;
}

//displays x::foo
print x::$p;
$object = new x;

print $object::$x;

?>
```

Related : [Properties](Properties), [Static Method](Static Method), [Data Container](Data Container), [Readable](Readable), [Static Variables](Static Variables), [Writable](Writable), [get_object_vars()](get_object_vars()), [Scope Resolution Operator ::](Scope Resolution Operator ::), [Static Class](Static Class), [Writeable](Writeable), [Testable](Testable)
