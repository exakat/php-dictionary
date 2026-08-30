---
type: "concept"
title: "Behavior"
description: "Behavior, or behaviour, is the external, observable appearance or action of a system: what a piece of code actually does when it runs, as opposed to what its source merely reads."
resource: "https://phplang.org/spec/03-terms-and-definitions.html"
tags: ["concept", "specification"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Behavior

Behavior, or behaviour, is the external, observable appearance or action of a system: what a piece of code actually does when it runs, as opposed to what its source merely reads.

The PHP Language Specification distinguishes three degrees of predictability for behavior that is not fully pinned down by the language rules: ``implementation-defined behavior``, where the engine must pick one option and document it; ``unspecified behavior``, where the engine may pick any valid option, with no obligation to document or stay consistent; and ``undefined behavior``, where no result is guaranteed at all, usually because the code violates a language constraint.

## Documentation
- [https://phplang.org/spec/03-terms-and-definitions.html](https://phplang.org/spec/03-terms-and-definitions.html)

## See Also
- [Undefined behavior - Wikipedia](https://en.wikipedia.org/wiki/Undefined_behavior)

## Related
- [Implementation-Defined Behavior](/features/implementation-defined-behavior.md)
- [Unspecified Behavior](/features/unspecified-behavior.md)
- [Undefined Behavior](/features/undefined-behavior.md)
- [Constraint](/features/constraint.md)

