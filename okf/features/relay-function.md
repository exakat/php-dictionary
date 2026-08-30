---
type: "PHP Feature"
title: "Relay Function"
description: "A relay function, or a relay method, is a function that calls another function, with the same arguments."
resource: "https://en.wikipedia.org/wiki/Delegation_pattern"
tags: ["method"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Relay Function

A relay function, or a relay method, is a function that calls another function, with the same arguments. It is merely relaying the arguments from one to the other.

A relay function also returns the value of the relayed function.

A relay function does not add any added value over the other function, except a renaming of the feature.

Relay functions may be nested several levels, depending on the situation.

```php
<?php

    function foo($a) {
        return goo($a);
    }
    
    function goo($a) {
        return hoo($a);
    }
    
    function hoo($a) {
        return doSomething();
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Delegation_pattern](https://en.wikipedia.org/wiki/Delegation_pattern)

## See Also
- [Proxy pattern](https://en.wikipedia.org/wiki/Proxy_pattern)

## Related
- [Functions](/features/function.md)
- [Method](/features/method.md)
- [Direct Output](/features/direct-output.md)
- [Flexibility](/features/flexibility.md)

