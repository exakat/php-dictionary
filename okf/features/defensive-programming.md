---
type: "PHP Feature"
title: "Defensive Programming"
description: "Defensive programming is a programming approach where the code is written assuming that things can go wrong, even when they shouldn't, and it should actively guard against incorrect input, unexpected states, or misuse."
resource: "https://en.wikipedia.org/wiki/Defensive_programming"
tags: ["paradigm"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Defensive Programming

Defensive programming is a programming approach where the code is written assuming that things can go wrong, even when they shouldn't, and it should actively guard against incorrect input, unexpected states, or misuse.

```php
<?php

try {
    $number = random_int(0, 10);
} catch (Random\RandomException $e) {
    // This handle cases where no entropy sources are found 
    // This is very rare
}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Defensive_programming](https://en.wikipedia.org/wiki/Defensive_programming)

## See Also
- [Learn 5 defensive programming techniques from experts](https://www.techtarget.com/searchsoftwarequality/feature/Learn-5-defensive-programming-techniques-from-experts)
- [Defensive programming: the good, the bad and the ugly](https://enterprisecraftsmanship.com/posts/defensive-programming/)

## Related
- [Offensive Programming](/features/offensive-programming.md)
- [Paradigm](/features/paradigm.md)
- [Double Check](/features/double-check.md)

