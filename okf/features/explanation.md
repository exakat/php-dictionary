---
type: "concept"
title: "Explanation"
description: "In the context of static analysis and code review, an explanation is a natural-language description of why a piece of code is flagged, what rule it violates, and how to fix it."
resource: "https://en.wikipedia.org/wiki/Self-documenting_code"
tags: ["concept", "documentation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Explanation

In the context of static analysis and code review, an explanation is a natural-language description of why a piece of code is flagged, what rule it violates, and how to fix it.

Good explanations bridge the gap between a raw finding, with context data such as file, line, severity,... and actionable understanding. They include: the name and rationale of the rule, a concrete example of the problematic pattern, the recommended alternative, and links to documentation or further reading.

In a broader software context, explanation also refers to the practice of making code behavior transparent and understandable: through comments, documentation, naming conventions, and readable structure. Self-explanatory code minimizes the need for inline comments by making intent visible in the code itself.

AI-assisted code explanation is an emerging use case where a language model summarises what a function or class does, identifies its contract, and describes its edge cases.

## Documentation
- [https://en.wikipedia.org/wiki/Self-documenting_code](https://en.wikipedia.org/wiki/Self-documenting_code)

## See Also
- [phpDocumentor documentation](https://docs.phpdoc.org/)
- [PHPStan documentation](https://phpstan.org/user-guide/getting-started)

## Related
- [Comments](/features/comment.md)
- [Docblock](/features/docblock.md)
- [Documentation](/features/documentation.md)
- [Best Practices](/features/best-practice.md)
- [Clean Code](/features/clean-code.md)

