---
type: "language construct"
title: "declare()"
description: "``declare()``is used to set execution directives for a block of code."
resource: "https://www.php.net/manual/en/control-structures.declare.php"
tags: ["language construct"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# declare()

``declare()``is used to set execution directives for a block of code.

``declare()`` may set the following values: 

+ ``strict_types``: strict typing in the block
+ ``ticks``: generate a tick event 
+ ``encoding``: per-file encoding directive

``declare()`` affects some configuration for the next block of code.

It is a language construct.

```php
<?php

    declare(strict_types=1, encoding='UTF-8');

?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.declare.php](https://www.php.net/manual/en/control-structures.declare.php)

## See Also
- [Why use declare(strict_types=1) in PHP – Fast tips](https://dev.to/inspector/why-use-declarestricttypes1-in-php-fast-tips-3c1)

## Related
- [strict_types](/features/strict_types.md)
- [Tick](/features/tick.md)
- [declare Encoding](/features/declare-encoding.md)
- [Control Flow](/features/control-flow.md)
- [Control Structures](/features/control-structure.md)
- [Unicode](/features/unicode.md)

