---
type: "concept"
title: "Writeable"
description: "Something is writeable when its current value may be modified."
resource: "https://www.php.net/manual/en/function.is-writeable.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Writeable

Something is writeable when its current value may be modified. For example, a variable is writeable, as it may be changed at any moment: it may be unset, appended, prepended, replaced, or incremented. 

On the other hand, a property may be unwriteable, depending on the context, because of the visibility configuration.

Variable, properties with the correct visibility, static properties, array elements are all writeable. To check if a property is writeable or not, one should use the reflection engine. Most often, it is base on code knowledge.

Properties may be ``readonly``, which means they can be written once, and won't change value later. Modification limiting, and fine grained access may be achieved with property hooks.

Writeable also applies to files, as the operating system may or may not allow the modification of files. This may be checked with ``is_writeable()`` function.

```php
<?php

    $v = 3;
    ++$v; // $v was incremented
    
    class X {
        private int $p;
        
        function __construct() {
            // The property p is writeable in this part of the code
            $this->p = 1;
        }
    }
    
    $x = new X();
    // The property p is not writeable from this part of the code

?>
```

## Documentation
- [https://www.php.net/manual/en/function.is-writeable.php](https://www.php.net/manual/en/function.is-writeable.php)

## See Also
- [Visibility](https://www.php.net/manual/en/language.oop5.visibility.php)
- [PHP RFC: Readonly properties 2.0](https://wiki.php.net/rfc/readonly_properties_v2)

## Related
- [Visibility](/features/visibility.md)
- [Variables](/features/variable.md)
- [Static Property](/features/static-property.md)
- [Properties](/features/property.md)
- [Container](/features/container.md)
- [Array Element](/features/array-element.md)
- [Readable](/features/readable.md)
- [Reflection](/features/reflection.md)
- [Readonly](/features/readonly.md)
- [Property Hook](/features/property-hook.md)
- [fopen()](/features/fopen.md)

