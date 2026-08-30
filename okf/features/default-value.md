---
type: "concept"
title: "Default Value"
description: "Default value is the value that a parameter or a property takes when it is used for the first time, and have not been provided."
resource: "https://www.php.net/manual/en/functions.arguments.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Default Value

Default value is the value that a parameter or a property takes when it is used for the first time, and have not been provided. 

Arguments and properties may have a default value. That way, arguments may be skipped when the method is being called, and the properties do not have to be initialized before usage.

Variable have a default value of ``null``. Their initial assignment is considered a default value, as it replaces the ``null`` one.

```php
<?php

function foo($a = 1) {
    echo $a;
}

foo('one ');
foo();

// displays one 1

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.arguments.php](https://www.php.net/manual/en/functions.arguments.php)

## See Also
- [PHP - Default Arguments](https://www.tutorialspoint.com/php/php_default_arguments.htm)

## Related
- [Parameter](/features/parameter.md)
- [Properties](/features/property.md)
- [Default](/features/default.md)
- [Null](/features/null.md)
- [Null Pattern](/features/nullpattern.md)
- [Autovivification](/features/autovivification.md)
- [Fallback](/features/fallback.md)
- [Optional Parameter](/features/optional-parameter.md)

