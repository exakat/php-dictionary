---
type: "concept"
title: "Opinionated"
description: "A tool, library, or framework is called opinionated when it enforces a specific way of solving a problem: conventions for file structure, naming, architecture, or workflow, with little or no configuration to deviate from them."
resource: "https://en.wikipedia.org/wiki/Convention_over_configuration"
tags: ["concept", "architecture", "adjective"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Opinionated

A tool, library, or framework is called opinionated when it enforces a specific way of solving a problem: conventions for file structure, naming, architecture, or workflow, with little or no configuration to deviate from them. This is opposed to being unopinionated, or agnostic, where the tool stays neutral and leaves every such decision to the developer.

Opinionated tools trade flexibility for consistency and speed: once its conventions are learned, less boilerplate and fewer decisions are needed to become productive, and a codebase built with it stays predictable across an entire team. Convention over configuration is the principle usually behind this design choice. The downside surfaces when a project's needs diverge from the tool's assumptions, and working around them becomes harder than it would have been with an unopinionated alternative.

In the PHP ecosystem, Laravel is generally considered more opinionated than Symfony, which favors composability and bring-your-own-components. PHPUnit is opinionated about the naming and location of test methods, while Behat is opinionated about describing behavior in Gherkin.

## Documentation
- [https://en.wikipedia.org/wiki/Convention_over_configuration](https://en.wikipedia.org/wiki/Convention_over_configuration)

## See Also
- [Symfony vs. Laravel: Framework Choice for PHP Projects](https://www.toptal.com/php/choosing-between-symfony-and-laravel-frameworks)
- [Laravel vs. Symfony: Clash of the PHP Frameworks](https://www.zend.com/blog/laravel-vs-symfony)

## Related
- [Framework](/features/framework.md)
- [Boilerplate](/features/boilerplate.md)

