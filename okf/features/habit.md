---
type: "concept"
title: "Habit"
description: "A habit, in the context of software development, is a coding practice that a developer applies automatically and repeatedly, without necessarily making a deliberate decision each time."
resource: "https://en.wikipedia.org/wiki/Habit"
tags: ["concept", "best practice", "code quality"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Habit

A habit, in the context of software development, is a coding practice that a developer applies automatically and repeatedly, without necessarily making a deliberate decision each time.

Habits can be beneficial: such as always validating input, writing tests first, or naming variables clearly; they may be harmful, such as suppressing errors with ``@``, using magic numbers, or leaving dead code in place.

Good habits are the foundation of consistent code quality. They turn best practices into second nature. Bad habits are often the source of recurring issues in a codebase, since they are applied without reflection.

Static analysis tools are particularly effective at reporting bad habits: patterns that appear many times across a codebase, reflecting a systematic behaviour rather than a one-off mistake.

```php
<?php

    // A bad habit: silencing errors instead of handling them
    $result = @file_get_contents('data.json');

    // A good habit: checking return values explicitly
    $result = file_get_contents('data.json');
    if ($result === false) {
        throw new RuntimeException('Could not read data.json');
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Habit](https://en.wikipedia.org/wiki/Habit)

## See Also
- [The Power of Habit in Software Engineering](https://martinfowler.com/articles/writingPatterns.html)

## Related
- [Best Practices](/features/best-practice.md)
- [Coding Conventions](/features/coding-convention.md)
- [@, No Scream Operator](/features/noscream.md)
- [Dead Code](/features/dead-code.md)
- [Magic Numbers](/features/magic-number.md)
- [Readability](/features/readability.md)
- [Canonical](/features/canonical.md)

