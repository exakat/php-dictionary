---
type: "PHP Feature"
title: "Return Value"
description: "Return value is the value returned by a method or function call."
resource: "https://www.php.net/manual/en/function.include.php"
tags: ["function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Return Value

Return value is the value returned by a method or function call. 

That value may be typed with a data type. In that case, each call to ``return`` must return that type.

It may also be typed with ``never``, in case the method doesn't return anything. In that case, it would never ends, throw an exception or kill the execution.

A value is returned with the keyword ``return``. When no such command is used, for example when a method doesn't have a return command and reach the end of the method's body, then ``null`` is returned.

```php
<?php

function foo() : int {
    return 1;
}

function goo() : never {
    throw new Exception("Error");
}

function hoo() : void {
    echo __METHOD__;
    // No return value
}

// returns null
function bar() { }

?>
```

## Documentation
- [https://www.php.net/manual/en/function.include.php](https://www.php.net/manual/en/function.include.php)

## See Also
- [never return type - PHP 8.1](https://php.watch/versions/8.1/never-return-type)
- [PHP void Keyword - Return Type Declarations in PHP](https://zetcode.com/php/void-keyword/)

## Related
- [Null](/features/null.md)
- [Never Type](/features/never.md)
- [Void](/features/void.md)
- [throw](/features/throw.md)
- [Exit](/features/exit.md)
- [Infinite Loop](/features/infinite-loop.md)

