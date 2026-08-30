---
type: "PHP Feature"
title: "composer.json"
description: "``composer.json`` is the manifest file that Composer reads to manage a PHP project's dependencies."
resource: "https://getcomposer.org/doc/04-schema.md"
tags: ["configuration", "dependency"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# composer.json

``composer.json`` is the manifest file that Composer reads to manage a PHP project's dependencies. It lives at the root of the project and declares, among other things, the runtime dependencies under ``require``, the development-only dependencies under ``require-dev``, the ``autoload`` mapping used to generate the class autoloader, and any custom ``scripts`` that can be run with ``composer run``.

Version constraints in ``require`` follow semantic versioning ranges, such as ``^2.0`` or ``~1.4``, rather than pinning an exact version; the exact versions actually installed are recorded separately, in ``composer.lock``.

``composer.json`` is meant to be hand-edited, or edited through commands like ``composer require``, and is committed to version control. It is distinct from ``composer.lock``, which Composer generates and should not be edited by hand.

```php
{
    "name": "acme/example",
    "require": {
        "php": ">=8.1",
        "monolog/monolog": "^3.0" 
    },
    "require-dev": {
        "phpunit/phpunit": "^10.0" 
    },
    "autoload": {
        "psr-4": {
            "Acme\\Example\\": "src/" 
        }
    }
}
```

## Documentation
- [https://getcomposer.org/doc/04-schema.md](https://getcomposer.org/doc/04-schema.md)

## See Also
- [composer.json - Understanding version constraints and dependencies](https://www.trakked.io/en/blog/composer-json-understanding-version-constraints-and-dependencies)

## Related
- [Composer](/features/composer.md)
- [composer.lock](/features/composer.lock.md)
- [JavaScript Object Notation (JSON)](/features/json.md)
- [Packagist](/features/packagist.md)
- [Class Autoloading](/features/autoload.md)
- [Semantic Versioning](/features/semantic-versioning.md)
- [Dependency](/features/dependency.md)
- [PHP Standards Recommendations (PSR)](/features/psr.md)

