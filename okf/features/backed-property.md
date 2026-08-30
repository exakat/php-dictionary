---
type: "PHP Feature"
title: "Backed Property"
description: "A backed property is a property with a hook, that actually uses the eponymous property to store the value."
resource: "https://www.php.net/manual/en/language.oop5.property-hooks.php"
tags: ["property"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Backed Property

A backed property is a property with a hook, that actually uses the eponymous property to store the value.

The opposite of a backed property is a virtual property.

```php
<?php

class X {
    public $p { get => $this->p; }
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.property-hooks.php](https://www.php.net/manual/en/language.oop5.property-hooks.php)

## See Also
- [PHP 8.4 Property Hooks](https://ashallendesign.co.uk/blog/php-84-property-hooks)
- [Property Hooks Are Coming To PHP 8.4!](https://www.phparch.com/2024/10/property-hooks-are-coming-to-php-8-4/)

## Related
- [Virtual Property](/features/virtual-property.md)
- [Backed](/features/backed.md)

