---
type: "PHP Feature"
title: "Positional Parameters"
description: "A way of calling a function or method, where arguments are identified by their position in the signature or the call."
resource: "https://www.php.net/manual/en/functions.arguments.php"
tags: ["feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Positional Parameters

A way of calling a function or method, where arguments are identified by their position in the signature or the call. This is the traditional way of sending arguments to a method.

The alternative way is to use named parameters.

```php
<?php

function foo($a, $b) {
    return $a - $b;
}

echo foo(2, 3);  // return -1
echo foo(3, 2);  // return 1

echo foo(a: 2, b: 3);  // return -1
echo foo(b: 2, a: 3);  // return 1

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.arguments.php](https://www.php.net/manual/en/functions.arguments.php)

## See Also
- [PHP RFC: Named Arguments](https://wiki.php.net/rfc/named_params)

## Related
- [Named Parameters](/features/named-parameter.md)

