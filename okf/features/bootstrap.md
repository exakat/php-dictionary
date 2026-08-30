---
type: "PHP Feature"
title: "Bootstrap"
description: "The bootstrap concept generally means starting something using minimal initial resources and building it up by using the results of earlier steps."
resource: "https://en.wikipedia.org/wiki/Bootstrapping"
tags: ["execution cycle"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Bootstrap

The bootstrap concept generally means starting something using minimal initial resources and building it up by using the results of earlier steps. It's the idea of ``pulling yourself up by your own bootstraps``.

Use a small, simple starting point to create a more complex or capable system.

Bootstrapping include the following steps

+ Load composer autoload
+ Define base path
+ Load environment variables
+ Load configuration
+ Create the application object
+ Set up dependency injection container
+ Set up service providers
+ Establish connections to database, logging system, cache
+ Register routes
+ Attach listeners
+ Build the request object
+ Run the controller

These list is a general panorama. The steps may not be in order, not exhaustive not applicable to specific frameworks.

## Documentation
- [https://en.wikipedia.org/wiki/Bootstrapping](https://en.wikipedia.org/wiki/Bootstrapping)

## See Also
- [Bootstrapping a Frameworkless PHP Application](https://maximegosselin.com/posts/bootstrapping-a-frameworkless-php-application/)

## Related
- [Lifecycle](/features/lifecycle.md)
- [Global Code](/features/global-code.md)

