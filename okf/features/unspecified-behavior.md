---
type: "concept"
title: "Unspecified Behavior"
description: "Unspecified behavior is behavior for which the language specification provides two or more valid options, without requiring the engine to document which one it picked, or to stay consistent across calls."
resource: "https://phplang.org/spec/03-terms-and-definitions.html"
tags: ["concept", "specification"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Unspecified Behavior

Unspecified behavior is behavior for which the language specification provides two or more valid options, without requiring the engine to document which one it picked, or to stay consistent across calls. Unlike undefined behavior, every option is still a valid, non-erroneous outcome; unlike implementation-defined behavior, the engine does not have to commit to, or publish, a single choice.

An classic example is the order in which arguments are evaluated in a function call: the specification does not require left-to-right evaluation, so code that relies on a particular order, e.g. through side effects in the arguments, may behave differently between engine versions.

```php
<?php

    function noop($x) { return $x; }
    
    $i = 0;
    function next() {
        global $i;
        return $i++;
    }
    
    // unspecified: the order in which next() is called for each argument
    // is not guaranteed by the language
    noop(next(), next());

?>
```

## Documentation
- [https://phplang.org/spec/03-terms-and-definitions.html](https://phplang.org/spec/03-terms-and-definitions.html)

## See Also
- [Unspecified behavior - Wikipedia](https://en.wikipedia.org/wiki/Unspecified_behavior)

## Related
- [Behavior](/features/behavior.md)
- [Implementation-Defined Behavior](/features/implementation-defined-behavior.md)
- [Undefined Behavior](/features/undefined-behavior.md)

