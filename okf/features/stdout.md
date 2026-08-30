---
type: "PHP Feature"
title: "STDOUT"
description: "``stdout`` refers to the standard output stream."
resource: "https://www.php.net/manual/en/reserved.constants.php"
tags: ["system"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# STDOUT

``stdout`` refers to the standard output stream. It is a common term used in programming to represent the destination for standard output data. 

Native PHP functions echo and print typically send their argument to the standard output stream.

The standard output stream is explicitly available with the constant ``STDOUT``. This is a write-only stream.

The standard output is also available via the protocol ``php``, with the special URI ``stdout``. This is a write-only stream.

```php
<?php

    // implicitely write to the standard output
    echo 'Hello world';
    
    // explicitely write to the standard output
    fwrite(STDOUT, 'Hello world');
    
    // explicitely write to the standard output
    $fp = fopen('php://stdout', 'w');
    fwrite($fp, 'Hello world');

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.constants.php](https://www.php.net/manual/en/reserved.constants.php)

## See Also
- [PHP Protocol](https://www.php.net/manual/en/wrappers.php.php)

## Related
- [Echo](/features/echo.md)
- [Print](/features/print.md)
- [Stream](/features/stream.md)
- [Pipe ``|``, The Logical Operator](/features/pipe.md)
- [Log](/features/log.md)

