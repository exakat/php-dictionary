---
type: "PHP Feature"
title: "Backward Compatible"
description: "A feature is backward compatible when it can be handled by a previous version than its version of publication."
resource: "https://en.wikipedia.org/wiki/Backward_compatibility"
tags: ["compatibility"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Backward Compatible

A feature is backward compatible when it can be handled by a previous version than its version of publication. It is automatically ignored by the previous versions, either by design or by luck.

For example, the attributes ``#[Attribute]`` are backward compatible: they were introduced in version 8.0, and their syntax, starting as a comment with a ``#``, is backward compatible: it is processed as a comment in previous PHP versions.

Note that this example is partially backward compatible: it may work or not. 

The contrary of a backward compatible feature is backward incompatible.

```php
<?php

    #[Attribute] // This is backward compatible
    class X {
        function foo(#[AttributeForParameter] $a) { // This is not backward compatible
        
        }
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Backward_compatibility](https://en.wikipedia.org/wiki/Backward_compatibility)

## See Also
- [Roave: BackwardCompatibilityCheck](https://github.com/Roave/BackwardCompatibilityCheck)

## Related
- [Backward Incompatible](/features/backward-incompatible.md)
- [Forward Compatible](/features/forward-compatible.md)
- [Legacy](/features/legacy.md)
- [Migration](/features/migration.md)
- [Polyfill](/features/polyfill.md)

