---
type: "disambiguation"
title: "Unpacking"
description: "Unpacking has two meanings: + ``unpack()``, a PHP native function, which extracts data from a binary string."
resource: "https://www.php.net/manual/en/function.unpack.php"
tags: ["disambiguation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Unpacking

Unpacking has two meanings:

+ ``unpack()``, a PHP native function, which extracts data from a binary string. It has the ``pack()`` reverse function.
+ Unpacking arguments, with the ``...`` operator: turning an array into a list of arguments at call time.

```php
<?php

    // Unpacking arguments
    function foo($a, $b, $c) {
        return $a + $b * $c;
    }
    
    $arguments = ['a' => 1, 'b' => 2, 'c' => 3];
    echo foo(...$arguments);
    // display 7

?>
```

## Documentation
- [https://www.php.net/manual/en/function.unpack.php](https://www.php.net/manual/en/function.unpack.php)

## See Also
- [PHP RFC: Argument Unpacking](https://wiki.php.net/rfc/argument_unpacking)

## Related
- [Variadic](/features/variadic.md)

