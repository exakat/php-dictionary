---
type: "PHP Feature"
title: "stdclass"
description: "Stdclass is a native PHP class."
resource: "https://www.php.net/manual/en/language.types.object.php#language.types.object.casting"
tags: ["native class"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# stdclass

Stdclass is a native PHP class. It is the class used when a generic object is created, for example with ``json_decode()`` or the ``(object)`` cast operator.

The stdClass is allowed to create dynamic properties on the fly, as its base definition has none.

```php
<?php

class X {
    private $property = 1;
    
    function foo() {
        // dynamic property
        $this->a = 1;
        
        // dynamic property with variable name 
        $b = "abc";
        $this->$b = 1; 
        
        // static property
        $this->property = 1;
    }
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.object.php#language.types.object.casting](https://www.php.net/manual/en/language.types.object.php#language.types.object.casting)

## See Also
- [Quick way to create a PHP stdClass](https://www.simonholywell.com/post/2016/11/quick-way-to-create-php-stdclass/)

## Related
- [Properties](/features/property.md)
- [Dynamic Properties](/features/dynamic-property.md)
- [is_object()](/features/is_object.md)
- [Plain Old PHP Object (POPO)](/features/popo.md)

