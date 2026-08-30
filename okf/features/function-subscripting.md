---
type: "PHP Feature"
title: "Function Subscripting"
description: "Function subscripting is the ability to apply operators like ``->``, ``?->`` or ``[<index>]`` directly on the results of a method call."
resource: "https://www.php.net/manual/en/functions.user-defined.php"
tags: ["feature", "syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Function Subscripting

Function subscripting is the ability to apply operators like ``->``, ``?->`` or ``[<index>]`` directly on the results of a method call.

Using types, it is possible to ensure the previous call returns a valid array or object. When left unchecked, the subscripting leads to warnings or fatal errors.

```php
<?php

    // displays the third element of the response of 'callMethod', on object 'getObject';
    echo getObject()->callMethod()[3];

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.user-defined.php](https://www.php.net/manual/en/functions.user-defined.php)

## See Also
- [PHP manual: Arrays](https://www.php.net/manual/en/language.types.array.php)

## Related
- [Dereferencing](/features/dereferencing.md)

