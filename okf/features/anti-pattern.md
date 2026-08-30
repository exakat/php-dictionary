---
type: "concept"
title: "Anti-Pattern"
description: "An anti-pattern, sometimes spelled ``antipattern``, is a common but counterproductive solution to a recurring problem."
resource: "https://en.wikipedia.org/wiki/Anti-pattern"
tags: ["concept", "quality"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Anti-Pattern

An anti-pattern, sometimes spelled ``antipattern``, is a common but counterproductive solution to a recurring problem. Unlike a mistake made once, an anti-pattern is a response that appears reasonable or even familiar, is applied repeatedly, and systematically produces negative consequences: increased complexity, fragility, poor performance, or security vulnerabilities.

The term was coined in 1995 by ``Andrew Koenig`` and popularised by the 1998 book Anti-Patterns by ``Brown``, ``Malveau``, ``McCormick``, and ``Mowbray``. It draws an explicit parallel with design patterns: where a design pattern documents a proven good solution, an anti-pattern documents a proven bad one, together with the root cause, the symptoms that reveal it, and the refactored solution that replaces it.

Anti-patterns appear at every level of software development:

+ Architectural anti-patterns: big ball of mud, god object, spaghetti code
+ Design anti-patterns: singleton overuse, service Locator, magic container
+ Coding anti-patterns: copy-paste programming, premature optimisation, magic numbers
+ PHP-specific anti-patterns: suppressing errors with ``@``, using ``eval()`` for configuration, ``register_globals``-era dynamic variable injection

Recognising anti-patterns is a key skill in code review and static analysis. Exakat detects a wide range of PHP anti-patterns through dedicated rules.

```php
<?php

    // Anti-pattern: God Object: one class that knows and does everything
    class Application {
        public function connectDatabase() { /* ... */ }
        public function renderHtml() { /* ... */ }
        public function sendEmail() { /* ... */ }
        public function validateInput() { /* ... */ }
        public function logError() { /* ... */ }
        // ... dozens more methods
    }
    
    // Anti-pattern: error suppression hiding real problems
    $result = @file_get_contents('data.json'); // silences warnings instead of handling them
    
    // Anti-pattern: magic numbers with no explanation
    if ($status === 3) { // What does 3 mean?
        redirect();
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Anti-pattern](https://en.wikipedia.org/wiki/Anti-pattern)

## See Also
- [Recognizing Common PHP Anti-Patterns](https://softwarepatternslexicon.com/php/anti-patterns-in-php/recognizing-common-php-anti-patterns/)
- [AntiPatterns book (Brown et al., 1998)](https://en.wikipedia.org/wiki/AntiPatterns)

## Related
- [Pattern](/features/pattern.md)
- [Fat Controller](/features/fat-controller.md)
- [Static Application Security Testing (SAST)](/features/sast.md)
- [Analysis](/features/analysis.md)

