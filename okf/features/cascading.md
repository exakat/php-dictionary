---
type: "concept"
title: "Cascading"
description: "Cascading is the general pattern where an action, or a change, applied to one element automatically triggers the same, or a related, action on the elements that depend on it, propagating outward from the original point."
resource: "https://en.wikipedia.org/wiki/Cascading_style_sheets"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Cascading

Cascading is the general pattern where an action, or a change, applied to one element automatically triggers the same, or a related, action on the elements that depend on it, propagating outward from the original point.

Cascading is a neutral, structural concept: it appears as a deliberate feature, such as ``ON DELETE CASCADE`` in a database, cascading style sheets, where a rule applies down through nested selectors, or cascading configuration, where a setting inherits from a parent scope unless overridden. It also appears as an unwanted side effect, as in a cascading failure, where a single fault propagates through dependent components until the whole system is affected.

Whether cascading is desirable depends entirely on whether the propagation is intended and bounded. A cascading delete that removes orphaned child rows is convenient; an unbounded cascade that silently deletes far more than expected is a bug. The same duality applies to type propagation, event propagation, and configuration inheritance, which are all instances of cascading.

## Documentation
- [https://en.wikipedia.org/wiki/Cascading_style_sheets](https://en.wikipedia.org/wiki/Cascading_style_sheets)

## See Also
- [Method Chaining](https://en.wikipedia.org/wiki/Method_chaining)
- [Fluent Interface](https://en.wikipedia.org/wiki/Fluent_interface)

## Related
- [Propagation](/features/propagation.md)
- [Cascading Failure](/features/cascading-failure.md)
- [Foreign Key](/features/foreign-key.md)
- [Referential Integrity](/features/referential-integrity.md)
- [Inheritance](/features/inheritance.md)

