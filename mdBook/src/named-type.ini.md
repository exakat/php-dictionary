# Named Type
A named type is a type with a single name. This means native types, such as ``never``, ``int`` or ``array`` and custom types, such as classes and interfaces. It actually exclude constructed types, such as union types and intersection types. And DNF is included in union types.

Named types have a related Reflection class: ``ReflectionNamedType``.
```php
<?php

    function foo(A $a) : void {}

?>
```

Related : [Name](Name), [Union Type](Union Type), [Intersection Type](Intersection Type)
