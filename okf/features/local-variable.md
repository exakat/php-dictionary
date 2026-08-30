---
type: "PHP Feature"
title: "Local Variable"
description: "A local variable is a variable in a method or a function."
resource: "https://www.php.net/manual/en/language.variables.scope.php"
tags: ["variable"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Local Variable

A local variable is a variable in a method or a function. It is in the local scope, and is not available anywhere else.

A local variable is created by assigning it a value in a method, using the ``static`` keyword, or using the ``extract()`` function. It might be removed by the ``unset()`` function.

```php
<?php

    function foo() {
        $localVariable = 1;
        // ... more code
    }
    
    function goo() {
        // this variable is distinct from the one in foo()
        $localVariable = 2;
        // ... more code
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.variables.scope.php](https://www.php.net/manual/en/language.variables.scope.php)

## See Also
- [PHP local variable](https://www.educba.com/local-variable-in-php/)

## Related
- [Static Variables](/features/static-variable.md)
- [extract()](/features/extract.md)
- [unset()](/features/unset.md)
- [Global Variables](/features/global-variable.md)
- [Superglobal Variables](/features/superglobal.md)

