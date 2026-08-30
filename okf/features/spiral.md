---
type: "PHP Feature"
title: "Spiral"
description: "``Spiral`` has two main meanings in the PHP and software engineering world."
resource: "https://spiral.dev/docs"
tags: ["framework", "sdlc", "brand"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Spiral

``Spiral`` has two main meanings in the PHP and software engineering world.

``Spiral Framework`` is a high-performance PHP framework built on top of ``RoadRunner``, a Go-based application server. Unlike traditional PHP frameworks that re-bootstrap the application on every request, Spiral keeps the application alive between requests in long-running workers, significantly reducing overhead. It is well-suited for microservices, APIs, and high-throughput applications.

``Spiral`` model, or spiral development model is a software development lifecycle model that combines iterative development with systematic risk analysis. Each iteration, or spiral, passes through four phases: planning, risk analysis, engineering, and evaluation. It is particularly suited for large, complex, or high-risk projects where requirements may evolve.

Both concepts involve iterative, incremental progression: the spiral metaphor captures the idea of building upon previous cycles.

```php
<?php

    // Spiral Framework: defining a simple controller
    namespace App\Controller;
    
    use Spiral\Router\Annotation\Route;
    
    final class HomeController
    {
        #[Route(route: '/', name: 'home')]
        public function index(): string
        {
            return 'Hello from Spiral!';
        }
    }

?>
```

## Documentation
- [https://spiral.dev/docs](https://spiral.dev/docs)

## See Also
- [Spiral Framework](https://spiral.dev/)
- [Spiral Development Model (Wikipedia)](https://en.wikipedia.org/wiki/Spiral_model)
- [RoadRunner](https://roadrunner.dev/)

## Related
- [Framework](/features/framework.md)
- [Waterfall](/features/waterfall.md)
- [Agile](/features/agile.md)
- [Software Development Life Cycle (SDLC)](/features/sdlc.md)
- [Microservice](/features/microservice.md)
- [Async](/features/async.md)

## Details
- Packagist: [spiral/framework](https://packagist.org/packages/spiral/framework)
- Packagist: [spiral/roadrunner](https://packagist.org/packages/spiral/roadrunner)

