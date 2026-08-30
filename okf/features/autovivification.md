---
type: "PHP Feature"
title: "Autovivification"
description: "Autovivification is the automatic creation of an array when a value is dereferenced."
resource: "https://www.php.net/manual/en/migration81.deprecated.php#migration81.deprecated.core.autovivification-false"
tags: ["false", "null"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Autovivification

Autovivification is the automatic creation of an array when a value is dereferenced.

Autovivification from scalars, including true, is deprecated since PHP 7.4 and removed in version 8.0. 

Autovivification from ``false`` is deprecated since PHP 8.1. 

Autovivification from null is valid.

```php
<?php

    $a = false;
    $a[1] = 2;
    
    $b = null;
    $b[3] = 4;

?>
```

## Documentation
- [https://www.php.net/manual/en/migration81.deprecated.php#migration81.deprecated.core.autovivification-false](https://www.php.net/manual/en/migration81.deprecated.php#migration81.deprecated.core.autovivification-false)

## See Also
- [Autovivification on wikipedia](https://en.wikipedia.org/wiki/Autovivification)

## Related
- [Null](/features/null.md)
- [False](/features/false.md)
- [Array, []](/features/array.md)
- [Default Value](/features/default-value.md)

## Details
- PHP since: 5.0
- PHP until: 8.0
- Deprecated: 8.1

