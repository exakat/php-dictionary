---
type: "concept"
title: "Close Naming"
description: "Close naming is the creation of names that have little differences between them, and which leads human to easily confusing them more often."
resource: "https://en.wikipedia.org/wiki/Naming_convention_(programming)"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Close Naming

Close naming is the creation of names that have little differences between them, and which leads human to easily confusing them more often. 

The confusion may originate from different sources: 

+ Names with only one or two letters of difference: ``get``/``set``; ``max``/``map``;  ``type``/``typo``; 
+ Swaps of parts of the name:  ``xmlDiff``/``diffXml``; 
+ Names with hard to read letters:  ``x0``/``xO``/``xQ``
+ Names with possible opposite means:  ``host``, ``client``,

Close naming does not always yield error, but requires extra attention to ensure it is not confused with another structure.

Close naming may happen with any named structure: variables, methods, classes, constants, etc. It is part of healthy coding conventions.

## Documentation
- [https://en.wikipedia.org/wiki/Naming_convention_(programming)](https://en.wikipedia.org/wiki/Naming_convention_(programming))

## See Also
- [PSR-1: Basic Coding Standard](https://www.php-fig.org/psr/psr-1/)
- [Levenshtein distance - Wikipedia](https://en.wikipedia.org/wiki/Levenshtein_distance)

## Related
- [Variables](/features/variable.md)
- [Name](/features/name.md)
- [Name Conventions](/features/name-convention.md)
- [Variable Shadowing](/features/variable-shadowing.md)

