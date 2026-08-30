---
type: "concept"
title: "Deterministic"
description: "A deterministic function is a function that produces the same output, based on the same input."
resource: "https://www.simplethread.com/pure-and-deterministic-functions/"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Deterministic

A deterministic function is a function that produces the same output, based on the same input. 

``strlen()`` is a deterministic function: it always returns the length of a string the same way. 

``time()`` is not a deterministic function: it always returns a different value, as time passes. ``rand()``, ``time()`` are non-deterministic.

A function becomes non-deterministic when it relies on systems that may change between two calls. This is the case for files or database accesses.

## Documentation
- [https://www.simplethread.com/pure-and-deterministic-functions/](https://www.simplethread.com/pure-and-deterministic-functions/)

## See Also
- [Understanding the differences between deterministic and probabilistic observability](https://docs.blackfire.io/continuous-profiling-cookbooks/understanding)

## Related
- [Random](/features/random.md)
- [Testable](/features/testable.md)
- [Determinism](/features/determinism.md)
- [Random\Engine](/features/random_engine.md)

