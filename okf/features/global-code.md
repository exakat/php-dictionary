---
type: "PHP Feature"
title: "Global Code"
description: "The global code is the code that doesn't belong to any method or function."
resource: "https://www.php.net/manual/en/language.basic-syntax.phpmode.php"
tags: ["syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Global Code

The global code is the code that doesn't belong to any method or function. Since PHP has no ``main()`` method that is called upon execution, the global code in the first file called is used. It is responsible to make the first calls to objects and functions.

Global code is usually organised in a sequential manner. Once the bootstrapping, which create the first objects, install autoload, detect environment, is done, the global code calls one object and let it handle the request.

```php
<?php

// This is the global code
foo();

function foo() {}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.basic-syntax.phpmode.php](https://www.php.net/manual/en/language.basic-syntax.phpmode.php)

## See Also
- [PHP Code Execution Flow](https://webkul.com/blog/php-code-execution-flow/)

## Related
- [Bootstrap](/features/bootstrap.md)
- [Order Of Execution](/features/order-of-execution.md)

