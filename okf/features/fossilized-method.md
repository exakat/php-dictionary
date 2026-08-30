---
type: "static analysis"
title: "Fossilized Methods"
description: "A method become fossilized when it is overwritten many times, creating a difficult update of the method signature, without impacting many parts of the code."
resource: "https://en.wikipedia.org/wiki/Technical_debt"
tags: ["structure", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Fossilized Methods

A method become fossilized when it is overwritten many times, creating a difficult update of the method signature, without impacting many parts of the code.

The easiest solution to this situation is to refrain from updating the signature anymore. At that point, the method is fossilized.

```php
<?php

class x {
    function foo(A $a) : array {}
}

class y1 extends x {
    function foo(A $a) : array {}
}

class y2 extends x {
    function foo(A $a) : array {}
}

// Updating this method means updating y2, y1, x... 
class yN extends x {
    function foo(A $a) : array {}
}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Technical_debt](https://en.wikipedia.org/wiki/Technical_debt)

## See Also
- [Method fossilisation](https://www.exakat.io/en/method-fossilisation/)

## Related
- [Method](/features/method.md)

