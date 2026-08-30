---
type: "static analysis"
title: "Cognitive Complexity"
description: "Cognitive complexity is a way of measuring how difficult a piece of code is for a human to understand."
resource: "https://en.wikipedia.org/wiki/Cognitive_complexity"
tags: ["complexity", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Cognitive Complexity

Cognitive complexity is a way of measuring how difficult a piece of code is for a human to understand. Unlike metrics that focus purely on structure or execution paths, cognitive complexity tries to reflect the mental effort required to read, follow, and reason about code.

```php
<?php

if ($a) {
    if ($b) {
        if ($c) {
            // hard to follow
        }
    }
}

if ($a == 1) {}
elseif ($a === 2) {}
elseif ($a === 3) {}
elseif ($a === 4) {}
else {}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Cognitive_complexity](https://en.wikipedia.org/wiki/Cognitive_complexity)

## See Also
- [SonarSource: Cognitive Complexity, a new way of measuring understandability](https://www.sonarsource.com/docs/CognitiveComplexity.pdf)
- [Cyclomatic complexity](https://en.wikipedia.org/wiki/Cyclomatic_complexity)

## Related
- [Cyclomatic Complexity](/features/cyclomatic-complexity.md)
- [Complexity](/features/complexity.md)
- [Metrics](/features/metrics.md)
- [Streamlining](/features/streamlining.md)

## Details
- Packagist: [rarst/phpcs-cognitive-complexity](https://packagist.org/packages/rarst/phpcs-cognitive-complexity)
- Packagist: [tomasvotruba/cognitive-complexity](https://packagist.org/packages/tomasvotruba/cognitive-complexity)

