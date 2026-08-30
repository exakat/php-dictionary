---
type: "directive"
title: "memory_limit"
description: "``memory_limit`` is the directive that caps the maximum amount of memory that PHP can use."
resource: "https://www.php.net/manual/en/ini.core.php#ini.memory-limit"
tags: ["-1", "directive"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# memory_limit

``memory_limit`` is the directive that caps the maximum amount of memory that PHP can use. 

The limit is expressed in bytes, although options are available for kb ``K``, Mb ``M`` and Gb ``G``, case insensitive.

The limit may be lifted by setting this directive to ``-1``.

PHP requires a minimum of memory when starting. Usually, it is about 2Mb of RAM. Setting any positive value for ``memory_limit`` below that threshold prevents PHP from starting.

The default value of ``memory_limit`` is 128 Mb. 

``memory_limit`` may be changed during execution with ``ini_set()``.

```php
<?php

    echo ini_get('memory_limit');  //128M

?>
```

## Documentation
- [https://www.php.net/manual/en/ini.core.php#ini.memory-limit](https://www.php.net/manual/en/ini.core.php#ini.memory-limit)

## See Also
- [PHP memory_limit – understanding and increasing](https://linuxblog.io/understanding-php-memory_limit/)

## Related
- [Memory](/features/memory.md)
- [php://memory](/features/php-memory.md)
- [php://tmp](/features/php-tmp.md)
- [Vertical Scaling](/features/vertical-scaling.md)

