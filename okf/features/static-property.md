---
type: "PHP Feature"
title: "Static Property"
description: "Static properties are properties defined with the ``static`` keyword."
resource: "https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.properties"
tags: ["data-container"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Static Property

Static properties are properties defined with the ``static`` keyword. They may be accessed with the name of the class, or instantiated object. 

Static properties are also called 'class properties' as they are common to all objects of the same class: there is no need to instantiate an object to access them, when they are public.

```php
<?php

    class X {
        static $p = 1;
    }
    
    //displays x::foo
    print x::$p;
    $object = new x;
    
    print $object::$x;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.properties](https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.properties)

## See Also
- [Late Static Bindings](https://www.php.net/manual/en/language.oop5.late-static-bindings.php)
- [Class variable](https://en.wikipedia.org/wiki/Class_variable)

## Related
- [Properties](/features/property.md)
- [Static Method](/features/static-method.md)
- [Data Container](/features/data-container.md)
- [Readable](/features/readable.md)
- [Static Variables](/features/static-variable.md)
- [Writable](/features/writable.md)
- [get_object_vars()](/features/get_object_vars.md)
- [Scope Resolution Operator ::](/features/scope-resolution-operator.md)
- [Static Class](/features/static-class.md)
- [Writeable](/features/writeable.md)
- [Testable](/features/testable.md)

