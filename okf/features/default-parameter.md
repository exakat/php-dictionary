---
type: "PHP Feature"
title: "Default Parameter"
description: "Methods may define a default value for parameters."
resource: "https://www.php.net/manual/en/functions.arguments.php#functions.arguments.default"
tags: ["parameter"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Default Parameter

Methods may define a default value for parameters. That way the parameter may be omitted during the call, and this value will be used. 

The default value may be a static expression, and, since PHP 8.1, also includes a new expression.

The default parameter must be the last of the parameters: adding a parameter without default value after one will yield an error and mess up the call parameters.

```php
<?php

function makeCoffee($type = 'latte') {
    return 'Making a cup of $latte';
}

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.arguments.php#functions.arguments.default](https://www.php.net/manual/en/functions.arguments.php#functions.arguments.default)

## See Also
- [Default Function Parameters In PHP](https://www.hashbangcode.com/article/default-function-parameters-php)
- [PHP Default Parameters](https://www.phptutorial.net/php-tutorial/php-default-parameters/)

## Related
- [Functions](/features/function.md)
- [Method](/features/method.md)
- [Null Pattern](/features/nullpattern.md)
- [Option](/features/option.md)

