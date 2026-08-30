---
type: "PHP Feature"
title: "Forward Compatible"
description: "A forward compatible feature is a feature that will be available in future versions."
resource: "https://en.wikipedia.org/wiki/Forward_compatibility"
tags: ["backward-incompatible"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Forward Compatible

A forward compatible feature is a feature that will be available in future versions. In particular, it might be couple with a forward incompatible feature, which will be dropped, while the forward compatible feature will stay. 

For example, PHP allows the increment of non-numeric strings. This feature might be deprecated, and could be removed in a future version, not defined at the time of writing. The functions ``str_increment()`` and ``str_decrement()`` were introduced in version 8.3. They can replace the current feature, and they will be available in the future versions, making them forward compatible.

```php
<?php

    $a = 't';
    echo ++$a; //u
    
    $a = str_increment($a);
    echo $a; // v

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Forward_compatibility](https://en.wikipedia.org/wiki/Forward_compatibility)

## See Also
- [PHP manual: Migrating from PHP 8.2.x to PHP 8.3.x](https://www.php.net/manual/en/migration83.php)
- [str_increment](https://www.php.net/manual/en/function.str-increment.php)

## Related
- [Backward Compatible](/features/backward-compatible.md)
- [Backward Incompatible](/features/backward-incompatible.md)
- [Deprecated](/features/deprecated.md)
- [Upgrade](/features/upgrade.md)
- [Version](/features/version.md)
- [delayedtargetvalidation](/features/delayedtargetvalidation.md)

