---
type: "PHP Feature"
title: "Virtual Property"
description: "A virtual property is a class property, whose property hooks don't use the value."
resource: "https://www.php.net/manual/en/language.oop5.property-hooks.php"
tags: ["property"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Virtual Property

A virtual property is a class property, whose property hooks don't use the value. The virtual property has no need for actual storage, and relies on other means to provide the value. In effect, they rely on the property hooks ``get`` and ``set`` to access the value. They also rely on other properties, global variables or data generators to provide a value.

A virtual property cannot be ``static``, as property hooks are not supported for this type of properties.

```php
<?php

class Counter {
    private $count = 1;
    
    // $next is a virtual property : it doesn't rely on $this->next;
    public $next {
        get => $this->count + 1 + rand(0, 10);
        set {}
    }
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.property-hooks.php](https://www.php.net/manual/en/language.oop5.property-hooks.php)

## See Also
- [PHP 8.4: Property Hooks, Virtual Properties, and Potential Issues](https://geekytomato.com/php-8-4-property-hooks-virtual-properties-and-potential-issues/)

## Related
- [Properties](/features/property.md)
- [Property Hook](/features/property-hook.md)
- [Backed Property](/features/backed-property.md)

## Details
- PHP since: 8.4+

