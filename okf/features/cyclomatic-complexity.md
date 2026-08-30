---
type: "static analysis"
title: "Cyclomatic Complexity"
description: "Cyclomatic complexity is a software metric of the complexity of a program."
resource: "https://en.wikipedia.org/wiki/Cyclomatic_complexity"
tags: ["metric", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Cyclomatic Complexity

Cyclomatic complexity is a software metric of the complexity of a program.

This metric measures the number of decisions happening within the code. Those decisions are commands such as If/then, loops, or ternary operators.

```php
<?php

    function foo() {
        if ($a) {
    
        } else {
    
        }
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Cyclomatic_complexity](https://en.wikipedia.org/wiki/Cyclomatic_complexity)

## See Also
- [Cyclomatic Complexity for PHP](https://pdepend.org/documentation/software-metrics/cyclomatic-complexity.html)

## Related
- [Metrics](/features/metrics.md)
- [Cognitive Complexity](/features/cognitive-complexity.md)
- [Complexity](/features/complexity.md)

## Details
- Packagist: [phpmetrics/phpmetrics](https://packagist.org/packages/phpmetrics/phpmetrics)

