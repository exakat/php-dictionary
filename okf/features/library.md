---
type: "concept"
title: "Library"
description: "A library is a collection of reusable code, functions, classes, or constants, that provides specific functionality and can be included in different applications."
resource: "https://en.wikipedia.org/wiki/Library_(computing)"
tags: ["concept", "ecosystem"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Library

A library is a collection of reusable code, functions, classes, or constants, that provides specific functionality and can be included in different applications.

Libraries are included, and then executed: yet, they do not have an entry point of their own. The calling application controls when and how the library's code is invoked. This distinguishes a library from a framework, which imposes a structure and calls the application's code instead.

Libraries cover a wide range of concerns: string manipulation, date handling, HTTP clients, cryptography, image processing, data parsing, and more. Using a well-maintained library avoids reinventing the wheel and benefits from the work and review of the wider community.

Libraries are distributed through a package manager. The most common is ``Composer`` and libraries are indexed on ``Packagist``. A library is declared as a dependency in ``composer.json`` and loaded via the Composer autoloader. Choosing a library involves evaluating its activity, test coverage, license, and compatibility with the target PHP version.

Writing a library requires extra discipline compared to application code: the public API must be stable, backward compatibility must be maintained across versions, and the library should have no opinion about the application's framework or infrastructure.

## Documentation
- [https://en.wikipedia.org/wiki/Library_(computing)](https://en.wikipedia.org/wiki/Library_(computing))

## See Also
- [Packagist](https://packagist.org/)
- [Composer documentation](https://getcomposer.org/doc/)

## Related
- [Composer](/features/composer.md)
- [Packagist](/features/packagist.md)
- [Framework](/features/framework.md)
- [Dependency](/features/dependency.md)
- [Class Autoloading](/features/autoload.md)
- [Open Source](/features/open-source.md)
- [Vendor Lock-in](/features/vendor-lockin.md)
- [Application Programming Interface (API)](/features/api.md)
- [Dynamic Loading](/features/dynamic-loading.md)
- [Foreign Function Interface (FFI)](/features/ffi.md)
- [Software Development Kit (SDK)](/features/sdk.md)

