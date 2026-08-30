---
type: "PHP Feature"
title: "var_dump()"
description: "``var_dump()`` displays the information in a variable or any data container."
resource: "https://www.php.net/var_dump"
tags: ["debug", "native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# var_dump()

``var_dump()`` displays the information in a variable or any data container. It is a debugging function.

``var_dump()`` is one of the most famous PHP functions. It is often related to ``print_r()`` and ``var_export()``.

```php
<?php

    $a = true;
    var_dump($a);
    // bool(true)

?>
```

## Documentation
- [https://www.php.net/var_dump](https://www.php.net/var_dump)

## See Also
- [PHP var_dump() Function: Explanation with Examples](https://www.slingacademy.com/article/php-var-dump-function-explanation-with-examples/)

## Related
- [print_r()](/features/print_r.md)
- [debug_backtrace()](/features/debug_backtrace.md)
- [var_export()](/features/var_export.md)
- [Debugger](/features/debugger.md)

## Details
- Packagist: [koriym/printo](https://packagist.org/packages/koriym/printo)
- Packagist: [symfony/var-dumper](https://packagist.org/packages/symfony/var-dumper)
- Packagist: [spiral/dumper](https://packagist.org/packages/spiral/dumper)

