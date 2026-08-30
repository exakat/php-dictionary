---
type: "directive"
title: "serialize_precision"
description: "The ``serialize_precision`` PHP ini directive controls the number of significant digits used when serializing float values via ``serialize()`` and ``json_encode()``."
resource: "https://www.php.net/manual/en/ini.core.php#ini.serialize-precision"
tags: ["directive", "float", "ini"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# serialize_precision

The ``serialize_precision`` PHP ini directive controls the number of significant digits used when serializing float values via ``serialize()`` and ``json_encode()``.

Since PHP 7.1, the default is ``-1``, which uses the minimum number of digits needed to uniquely represent each float, ensuring round-trip fidelity. A positive integer value uses that many significant digits instead, which may introduce rounding.

```php
<?php

    // With serialize_precision = -1 (default since PHP 7.1)
    $value = 3.141592653589793;
    echo json_encode($value);
    // outputs: 3.141592653589793
    
    // With serialize_precision = 14
    // outputs: 3.1415926535898

?>
```

## Documentation
- [https://www.php.net/manual/en/ini.core.php#ini.serialize-precision](https://www.php.net/manual/en/ini.core.php#ini.serialize-precision)

## See Also
- [precision](https://www.php.net/manual/en/ini.core.php#ini.precision)

## Related
- [Directives](/features/directive.md)
- [Floating Point Numbers](/features/float.md)
- [precision](/features/precision.md)
- [Serialization](/features/serialization.md)
- [SplSubject](/features/splsubject.md)

