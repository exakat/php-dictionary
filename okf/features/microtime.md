---
type: "PHP Feature"
title: "microtime()"
description: "``microtime()`` is a native PHP function, which returns the current timestamp, including microseconds."
resource: "https://www.php.net/manual/fr/function.microtime.php"
tags: ["micro", "native function", "date"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# microtime()

``microtime()`` is a native PHP function, which returns the current timestamp, including microseconds. This is a very precise measure of time.

``microtime()`` is often used for speed measurements, and it may be easily replaced by ``hrtime()`` for that purpose, since PHP 7.3.

```php
<?php

    $time_start = microtime(true);
    
    // Sleep some time
    usleep(100);
    
    $time_end = microtime(true);
    $time = $time_end - $time_start;
    
    echo "Slept for $time seconds\n";

?>
```

## Documentation
- [https://www.php.net/manual/fr/function.microtime.php](https://www.php.net/manual/fr/function.microtime.php)

## See Also
- [hrtime](https://www.php.net/manual/fr/function.hrtime.php)

## Related
- [hrtime()](/features/hrtime.md)
- [Micro-second](/features/micro-second.md)

