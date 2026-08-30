---
type: "concept"
title: "Complexity"
description: "Complexity refers to how difficult the code is to understand, maintain, test, and modify."
resource: "https://en.wikipedia.org/wiki/Cyclomatic_complexity"
tags: ["concept", "quality", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Complexity

Complexity refers to how difficult the code is to understand, maintain, test, and modify. It may be objectively measured, but also subjectively estimated.

Complexity is measured with cyclomatic complexity, cognitive complexity, algorithmic complexity. 

Complexity increases when:

+ Code takes many decisions in one context
+ Logic is deeply nested
+ Responsibilities are mixed and matched
+ Behavior is not obvious, and includes magic
+ Code is not readable
+ Naming is confusing

Non-complex code tends to:

+ Have small functions
+ Clear naming
+ Limited branching
+ Avoid exploding combinations as much as possible

Code complexity applies to all programming languages, and is not specific to PHP.

## Documentation
- [https://en.wikipedia.org/wiki/Cyclomatic_complexity](https://en.wikipedia.org/wiki/Cyclomatic_complexity)

## See Also
- [Code Complexity: An In-Depth Explanation and Metrics](https://blog.codacy.com/code-complexity)
- [What is Code Complexity?](https://jellyfish.co/library/code-complexity/)

## Related
- [Cognitive Complexity](/features/cognitive-complexity.md)
- [Cyclomatic Complexity](/features/cyclomatic-complexity.md)
- [Algorithmic Complexity](/features/algorithmic-complexity.md)

## Details
- Packagist: [sebastian/complexity](https://packagist.org/packages/sebastian/complexity)
- Packagist: [phpmetrics/phpmetrics](https://packagist.org/packages/phpmetrics/phpmetrics)

