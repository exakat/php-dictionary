---
type: "concept"
title: "Thin"
description: "Thin is an informal qualifier applied to a class that has very few responsibilities: it receives input, calls one collaborator, and returns output."
resource: "https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller"
tags: ["concept", "adjective", "mvc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Thin

Thin is an informal qualifier applied to a class that has very few responsibilities: it receives input, calls one collaborator, and returns output. It contains no business logic of its own.

A thin controller delegates all domain work to services, repositories, or domain objects. This makes it trivially testable and easy to replace.

The term is often used in the phrase ``thin controllers, fat models``, which is a common recommendation in MVC frameworks.

The opposite is a fat class. Taken to the extreme, a thin class becomes a mere pass-through: at that point it may be unnecessary altogether.

```php
<?php

    // Thin controller example
    class ArticleController {
        public function __construct(private ArticleService $articles) {}
    
        public function show(int $id): Response {
            return response()->json(
                $this->articles->findOrFail($id)
            );
        }
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller)

## See Also
- [Thin controllers, fat models](https://symfony.com/doc/current/best_practices.html#controllers)

## Related
- [Fat](/features/fat.md)
- [Slim](/features/slim.md)
- [Thin Method](/features/thin-method.md)
- [Fat Controller](/features/fat-controller.md)
- [Controller](/features/controller.md)
- [Single Responsability Principle (SRP)](/features/srp.md)
- [Service](/features/service.md)

