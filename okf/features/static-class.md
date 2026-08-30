---
type: "PHP Feature"
title: "Static Class"
description: "A static class is a class that only holds static methods, properties or constants."
resource: "https://www.php.net/manual/en/language.oop5.static.php"
tags: ["operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Static Class

A static class is a class that only holds static methods, properties or constants. 

There is no special syntax for such a class: it is simply created with the above-mentioned structures. Other programming languages have a dedicated syntax for them.

A static class is usually used by direct call, with the ``::`` operator. A static class may still be instantiated, though there is little usage for such an object.

```php
<?php

    class X {
        public static int $p = 0;
        
        public static function increment(): int {
            return self::$p++;
        }
    }
    
    echo X::increment(); // 1

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.static.php](https://www.php.net/manual/en/language.oop5.static.php)

## See Also

## Related
- [Scope Resolution Operator ::](/features/scope-resolution-operator.md)
- [Static Method](/features/static-method.md)
- [Static Property](/features/static-property.md)
- [Colon](/features/colon.md)

