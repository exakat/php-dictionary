---
type: "concept"
title: "Autowiring"
description: "Autowiring, or auto-wiring, is the ability of the framework to inject dependencies, based on the constructor signature."
resource: "https://symfony.com/doc/current/service_container/autowiring.html"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Autowiring

Autowiring, or auto-wiring, is the ability of the framework to inject dependencies, based on the constructor signature.

Autowiring is based on types, in the signature of the controller.

Autowiring is  commonly used in dependency injection, ``DI`` containers.

Autowiring reduces boilerplate code, enhances type usage and makes refactoring easier.

```php
<?php

    class Renderer {
        private View $view;
    
        function __construct(View $view) {
            $this->view = $view;
        }
    }

?>
```

## Documentation
- [https://symfony.com/doc/current/service_container/autowiring.html](https://symfony.com/doc/current/service_container/autowiring.html)

## See Also
- [Autowiring - php-di](https://php-di.org/doc/autowiring.html)

## Related
- [Dependency Injection](/features/dependency-injection.md)
- [Constructor](/features/constructor.md)
- [Boilerplate](/features/boilerplate.md)
- [Type System](/features/type.md)
- [Refactoring](/features/refactoring.md)

## Details
- Packagist: [nette/di](https://packagist.org/packages/nette/di)
- Packagist: [php-di/php-di](https://packagist.org/packages/php-di/php-di)

