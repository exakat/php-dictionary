---
type: "adjective"
title: "Greenfield"
description: "A greenfield project is a software development effort that starts from scratch, with no existing codebase, legacy constraints, or inherited technical debt."
resource: "https://en.wikipedia.org/wiki/Greenfield_project"
tags: ["architecture", "adjective"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Greenfield

A greenfield project is a software development effort that starts from scratch, with no existing codebase, legacy constraints, or inherited technical debt. The term comes from civil engineering, where building on undeveloped land, aka a green field, imposes no constraints from prior construction.

Greenfield development offers maximum design freedom: the team chooses the architecture, language runtime, framework, data model, and tooling without having to preserve backward compatibility or work around previous decisions. This freedom also means that all foundational choices, such as dependency injection strategy, persistence layer, authentication model, error handling conventions, must be made explicitly and early.

Characteristics of greenfield PHP projects:

+ No legacy code to maintain: the team can adopt modern PHP features such as named arguments, fibers, readonly properties, union types, and current best practices from day one.
+ Framework choice is open: a framework, such as Laravel, Symfony, Slim, or a custom stack can be selected on merit rather than migration cost.
+ No migration risk: the database schema, API contracts, and deployment pipeline are defined for the target state, not constrained by an existing one.
+ Higher up-front design cost: decisions that a brownfield project has already made, even poorly, must be made here deliberately.

The opposite of greenfield is brownfield development: working inside or alongside an existing system, where the constraints of prior decisions shape every new choice.

Greenfield projects benefit from:

+ Composer and Packagist for dependency management from the start.
+ Strict type declarations ``declare(strict_types=1)`` enforced project-wide from the first file.
+ Modern tooling: static analysis, automated refactoring, testing, all configured before the first feature is written.

```php
<?php

   // Greenfield entry point: strict types and modern conventions from file one.
   declare(strict_types=1);

   // Dependency injection container wired at bootstrap, no global state.
   $container = new \DI\Container();

   $app = $container->get(App::class);
   $app->run();

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Greenfield_project](https://en.wikipedia.org/wiki/Greenfield_project)

## See Also
- [Greenfield- vs. Brownfield-Approach - Definition & Explanation](https://easy-software.com/en/glossary/greenfield-vs-brownfield-approach/)
- [Difference between Brownfield and Greenfield Software Development](https://qarea.com/blog/difference-between-brownfield-and-greenfield-software-development)

## Related
- [Brownfield](/features/brownfield.md)
- [Legacy](/features/legacy.md)
- [Architecture](/features/architecture.md)
- [Dependency Injection](/features/dependency-injection.md)
- [Composer](/features/composer.md)

