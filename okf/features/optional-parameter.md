---
type: "PHP Feature"
title: "Optional Parameter"
description: "Optional parameters are parameters fitted with a default value."
resource: "https://www.php.net/manual/en/functions.arguments.php"
tags: ["parameter", "syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Optional Parameter

Optional parameters are parameters fitted with a default value. They may then be skipped when the function is called.

Optional parameters should be the last parameters: otherwise, PHP will have trouble figuring out which parameter uses which value.

```php
<?php

function foo($a, $b = 2) { }

// $b will be 2, using the default value
foo(1); 

// $b will be 3
foo(1, 3); 

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.arguments.php](https://www.php.net/manual/en/functions.arguments.php)

## See Also
- [PHP Default Parameters](https://www.phptutorial.net/php-tutorial/php-default-parameters/)
- [Default Function Parameters In PHP](https://www.hashbangcode.com/article/default-function-parameters-php)

## Related
- [Parameter](/features/parameter.md)
- [Default Value](/features/default-value.md)

