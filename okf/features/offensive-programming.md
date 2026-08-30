---
type: "PHP Feature"
title: "Offensive Programming"
description: "Offensive programming is a programming approach where the code is written code assuming that internal states should never go wrong, and don't have to be guarded against."
resource: "https://en.wikipedia.org/wiki/Defensive_programming"
tags: ["paradigm"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Offensive Programming

Offensive programming is a programming approach where the code is written code assuming that internal states should never go wrong, and don't have to be guarded against. Only external input, such as user input, should be thoroughly validated before usage.

Offensive programming requires drawing a line between internal and external data: while user input is obviously to be validated, there must be a clear rule for data coming from related services such as database, remote servers, API, file systems.

```php
<?php

    $number = random_int(0, 10);
    // This handle cases where no entropy sources are found 

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Defensive_programming](https://en.wikipedia.org/wiki/Defensive_programming)

## See Also
- [Offensive programming](https://en.wikipedia.org/wiki/Offensive_programming)
- [Defensive Coding Crash Course](https://www.phparch.com/2019/08/defensive-coding-crash-course/)
- [More Tips for Defensive Programming in PHP](https://www.sitepoint.com/more-tips-for-defensive-programming-in-php/)

## Related
- [Defensive Programming](/features/defensive-programming.md)
- [Paradigm](/features/paradigm.md)

