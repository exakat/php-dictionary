---
type: "concept"
title: "Noop"
description: "A noop, or no operation, is a command that does nothing."
resource: "https://en.wikipedia.org/wiki/NOP_(code)"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Noop

A noop, or no operation, is a command that does nothing. No-op may be an empty expression, or even entirely omitted. 

``echo`` an empty string is also a noop: it displays a string, which is empty so has no impact on the output. The entire command may be ignored.

Neutral operations such as ``+ 0`` or ``. ''`` are noops, but they include a silent cast to integer or string, which may have a larger impact on the other values of the operation.

No operations are often considered as useless. Noops are sometimes needed where an operation is needed, but, contextually, should be neutral.

This is distinct, though close, to the identity: identity returns the incoming data, doing nothing with it. Yet, it still returns something.

```php
<?php

// empty expressions: noops
$a = 1;;;

switch($m) {
    case 1:
     // silent no op here
     // but fallthrough
     
    case 2: 
        $b = 3;
}

while (false);

echo '';

$x = 'abc'.'';

'lone string';

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/NOP_(code)](https://en.wikipedia.org/wiki/NOP_(code))

## See Also
- [eio_nop](https://www.php.net/manual/en/function.eio-nop.php)
- [Noop polyfills](https://backendtea.com/post/noop-polyfill/)

## Related
- [Useless](/features/useless.md)
- [Identity](/features/identity.md)

